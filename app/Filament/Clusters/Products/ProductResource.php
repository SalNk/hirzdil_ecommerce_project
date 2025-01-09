<?php

namespace App\Filament\Clusters\Products;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Filament\Clusters\Products;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Filament\Clusters\Products\ProductResource\Pages\EditProduct;
use App\Filament\Clusters\Products\ProductResource\Pages\ListProducts;
use App\Filament\Clusters\Products\ProductResource\Pages\CreateProduct;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $label = 'Produits';
    protected static ?int $navigationSort = 3;
    protected static ?string $cluster = Products::class;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        FileUpload::make('image')
                            ->required()
                    ]),
                Section::make()
                    ->schema([
                        Select::make('shop_id')
                            ->label('Boutique')
                            ->required()
                            ->relationship('shop', 'name'),
                        Select::make('category_id')
                            ->label('Catégorie')
                            ->required()
                            ->relationship('category', 'name'),
                        Select::make('available')
                            ->label('Disponible')
                            ->options([
                                true => 'Actif',
                                false => 'Inactif',
                            ])
                            ->required(),
                    ]),
                Section::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->autofocus()
                            ->required()
                            ->debounce()
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->readOnly()
                            ->required(),
                    ]),
                Section::make()
                    ->schema([
                        TextInput::make('price')
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('posts')
                            ->columnSpan(2),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Image'),
                TextColumn::make('name')->label('Nom du produit')->searchable()->sortable(),
                TextColumn::make('shop.user.name')->label('Utilisateur')->sortable(),
                TextColumn::make('category.name')->label('Catégorie')->sortable(),
                TextColumn::make('price')->label('Prix')->sortable(),
                IconColumn::make('available')->label('Disponible')->sortable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}