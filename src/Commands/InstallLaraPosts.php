<?php


namespace Slymbo\Laraposts\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class InstallLaraPosts extends Command
{
    protected $signature = 'laraposts:install';

    protected $description = "Install laraposts package";

    public function handle(){

        $this->info("Installation Laraposts Package");
        $this->info("Publishing configuration...");

        if (!$this->configExists('laraposts.php'))
        {
            $this->publishConfiguration();
            $this->info("Publish Configuration");
        }
        else{
            if($this->shouldOverwriteConfig())
            {
                $this->info("Overwriting configuration file..." );
                $this->publishConfiguration($force=true);
            }else{
                $this->info("Existing configuration was not overwritten");
            }
        }
    }

    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        $this->confirm(
            "Config file already exists. Do you want to overwrite it?",
            false
        );
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            "--provider" => "Slymbo\Laraposts\Providers\LarapostsServiceProvider",
            "--tag" => "config"
        ];

        if($forcePublish === true){
            $params["--force"] = true;
        }

        $this->call("vendor:publish", $params);
    }
}
