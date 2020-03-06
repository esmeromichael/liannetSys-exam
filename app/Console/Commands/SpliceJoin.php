<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SpliceJoin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SpliceJoin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'String to split and combine';

    protected  $string;

    protected  $length;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->string = $this->ask('Enter the value of string :');
        $this->length = $this->ask('Enter the length to slice :');

        $splices = $this->sliceString();

        $this->line(join(", ",$splices));

        $combines = $this->isSpliceJoin($splices);

        $this->line(join(", ",$combines));
    }

    public function sliceString()
    {
        $string_length = strlen($this->string);

        $portions = [];

        for ($i = 0; $i < $string_length; $i++) {
            if($i%$this->length == 0 || $i === 0) {
                $portions[] = substr($this->string, $i, $this->length);
            }
        }
        return $portions;
    }

    public function spliceJoin(array $splices)
    {
        $combines = [];
        $count    = count($splices);

        for ($i = 0; $i < $count; $i++) {
            $string = $splices[$i];

            for ($x = 0; $x < $count; $x++) {
                if($i != $x) {
                    $string .= $splices[$x];
                }
            }
            $combines[] = $string;

            $string = $splices[$i];

            for ($x = ($count-1); $x >= 0; $x--) {
                if($i != $x) {
                    $string .= $splices[$x];
                }
            }

            $combines[] = $string;
        }
        return in_array($string, $combines);
        //return $combines;
    }

    public function isSpliceJoin(string $text, int $len, string $target)
    {
        $splices = $this->sliceString();
        $combines = $this->spliceJoin($splices);
        
        return in_array($text, $combines) && isset($combines[$target]);
    }

}
