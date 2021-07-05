<?php

namespace App\Console\Commands;

use App\Models\Message;
use Illuminate\Console\Command;

class PruneOldMessagesCommand extends Command
{
    protected $signature = 'script:prune-old-messages';

    public function handle()
    {
        $count = Message::whereDate('expires_at', '<', now())->delete();

        $this->info('Pruned ' . $count . ' old messages.');

        return 0;
    }
}
