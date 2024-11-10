<?php

namespace App\Providers;

use AaronFrancis\Solo\Commands\EnhancedTailCommand;
use AaronFrancis\Solo\Facades\Solo;
use AaronFrancis\Solo\Providers\SoloApplicationServiceProvider;

class SoloServiceProvider extends SoloApplicationServiceProvider
{
    public function register()
    {
        Solo::useTheme('dark')
            // Commands that auto start.
            ->addCommands([
                'Vite' => 'npm run dev',
                'Queue:Default' => './vendor/bin/sail artisan queue:listen --queue=default',
                'Queue:PromptLLM' => './vendor/bin/sail artisan queue:listen --queue=prompt-llm',
                EnhancedTailCommand::make('Logs', 'tail -f -n 100 ' . storage_path('logs/laravel.log')),
                'Storybook' => 'npm run storybook',
            ])
            // Not auto-started
            ->addLazyCommands([
                // 'Queue' => 'php artisan queue:listen --tries=1',
                // 'Reverb' => 'php artisan reverb:start',
                // 'Pint' => 'pint --ansi',
            ])
            // FQCNs of trusted classes that can add commands.
            ->allowCommandsAddedFrom([
                //
            ]);
    }

    public function boot()
    {
        //
    }
}
