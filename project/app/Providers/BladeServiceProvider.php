<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Form::component('bsBtnSave', 'admin.components.button.save', ['text']);
        Form::component('bsBtnSaveFooter', 'admin.components.button.save_footer', ['text']);
        Form::component('bsBtnEdit', 'admin.components.button.edit', ['model', 'text']);
        Form::component('bsBtnShow', 'admin.components.button.show', ['model', 'text']);
        Form::component('bsBtnFront', 'admin.components.button.front', ['route', 'text']);
        Form::component('bsBtnCreate', 'admin.components.button.create', ['text']);
        Form::component('bsBtnDelete', 'admin.components.button.delete', ['model', 'includeModal', 'text']);

        // General input
        Form::component('bsInput', 'admin.components.input.input', ['type', 'label', 'name', 'value' => null, 'attributes' => [], 'help' => null]);
        // Simple input types
        Form::component('bsText', 'admin.components.input.text', ['label', 'name', 'value' => null, 'attributes' => [], 'help' => null]);
        Form::component('bsEmail', 'admin.components.input.email', ['label', 'name', 'value' => null, 'attributes' => [], 'help' => null]);
        Form::component('bsNumber', 'admin.components.input.number', ['label', 'name', 'value' => null, 'attributes' => [], 'help' => null]);
        Form::component('bsPassword', 'admin.components.input.password', ['label', 'name', 'value' => null, 'attributes' => [], 'help' => null]);

        Form::component('bsTextarea', 'admin.components.input.textarea', ['label', 'name', 'value' => null, 'attributes' => [], 'help' => null]);
        Form::component('bsCheckbox', 'admin.components.input.checkbox', ['label', 'name', 'value' => null, 'attributes' => []]);
    }
}
