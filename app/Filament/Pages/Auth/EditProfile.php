<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Section;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class EditProfile extends BaseEditProfile
{
    protected static string $view = 'filament.pages.auth.edit-profile';

    protected static string $layout = 'filament-panels::components.layout.index';

    // desativar a largura total do botão
    protected function hasFullWidthFormActions(): bool
    {
        return false;
    }

    // definir um rótulo
    public static function getSlug(): string
    {
        return static::$slug ?? 'perfil';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Personal Information')
                    // alinhar o título e a descrição à esquerda, os componentes do formulário dentro de um cartão à direita
                    ->aside()
                    // separa os campos em seções, cada uma com um título e uma descrição
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                ]),
            ]);
    }
}
