<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Modules\Book\Model\Book;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command {book? : book is book  } ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        if (!$this->argument('book')) {
//            $book = $this->ask('What is your book name?');
//        }
//        $pass = $this->secret('Enter your pass ');
//        $bool = $this->confirm('Are u Sure');
        $this->info('not allowed');
        $books = Book::all(['name','id'])->toArray();

        $this->table(['name', 'id'], $books);
//        $book = $this->argument('book');
//        Book::factory(1)->create(['name'=>$book]);
//        $book = $this->argument('book');
//        Log::error($book);
//        Log::error($pass);
//        Log::error($bool);

    }
}
