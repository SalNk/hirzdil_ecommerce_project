<?php

namespace App\Filament\Clusters\Customer\Resources;

use Filament\Forms;
use App\Models\Shop;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\Customer\Resources\ShopResource\Pages;
use App\Filament\Clusters\Customer\Resources\ShopResource\RelationManagers;
use App\Filament\Clusters\Products\Resources\ShopResource\RelationManagers\ProductsRelationManager;

class ShopResource extends Resource
{
    protected static ?string $model = Shop::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $cluster = Customer::class;
    protected static ?string $label = 'Boutiques';
    protected static ?string $navigationGroup = 'Vendeurs';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->schema([
                        FileUpload::make('image')
                            ->imageEditor()
                            ->image()
                    ]),
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nom de la boutique')
                            ->autofocus()
                            ->required()
                            ->debounce()
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->readOnly()
                            ->required(),
                        Select::make('status')
                            ->label('Visibilité')
                            ->options([
                                true => 'Visible',
                                false => 'Masquée',
                            ])
                            ->default(true)
                            ->required(),
                        Select::make('user_id')
                            ->relationship('user', 'name')
                    ]),
                // Section::make()
                //     ->schema([
                //         Repeater::make('products')
                //             ->label('Produits de la boutique')
                //             ->relationship()
                //             ->schema([
                //                 Group::make()
                //                     ->schema([
                //                         FileUpload::make('image')
                //                             ->required(),
                //                     ]),
                //                 Forms\Components\TextInput::make('name')
                //                     ->autofocus()
                //                     ->required()
                //                     ->debounce()
                //                     ->columnSpanFull()
                //                     ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                //                 Forms\Components\TextInput::make('slug')
                //                     ->readOnly()
                //                     ->required(),

                //                 TextInput::make('price')
                //                     ->required(),
                //                 Forms\Components\RichEditor::make('description')
                //                     ->required()
                //                     ->fileAttachmentsDisk('public')
                //                     ->fileAttachmentsDirectory('posts')
                //                     ->columnSpan(2),
                //             ])
                //             ->defaultItems(1)
                //             ->hiddenLabel()
                //             // ->columns([
                //             //     'md' => 10,
                //             // ])
                //             ->required()
                //     ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom de la boutique'),
                TextColumn::make('user.name')
                    ->label('Propriétaire'),
                IconColumn::make('status')
                    ->label('Visibilité')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ProductsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShops::route('/'),
            'create' => Pages\CreateShop::route('/create'),
            'edit' => Pages\EditShop::route('/{record}/edit'),
        ];
    }
}
