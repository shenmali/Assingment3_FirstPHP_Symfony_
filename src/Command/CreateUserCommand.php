<?php
// src/Command//CreateUserCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;

class CreateUserCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:min-max';

    public function __construct()
    {
        parent::__construct();
        //There is no need to give property here as it is arranged in Configure() at below
    }

    protected function configure()
    {
        $this
            // "php bin/console list"
			->setDescription("Min Max app.")
            //"--help" option
			->setHelp('Your Hello World')
            //get arguments from user
            ->addArgument('numberOfElement',InputArgument::OPTIONAL,'Who do you want to length of?',5)
            ->addArgument('sizeOfElement',InputArgument::OPTIONAL, 'the size of the index value',10)
           ; 
    }
    private function findMinMax($numberOfElement,$sizeOfElement){
        $arr1 = array();
		
		for($i=0; $i<$numberOfElement; $i++)
		{
			array_push($arr1, rand(1,$sizeOfElement));
            //add array to range of 0-Size Of Element 
		}
        $min = $arr1[0];//assign at min
        $max = $arr1[0];//assing at max
        for ($i=1;$i<count($arr1);$i++){
            if ($arr1[$i]<$min)//if next index of arr less than $min
                $min = $arr1[$i]; //the new $min
            if ($arr1[$i]>$max)//if next index of arr greater than $max
                $max=$arr1[$i];//the new $max
        }
        print_r($arr1);
        echo "\n";
        echo 'Max Value: '. $max . "\n" .'Min Value: '. $min;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln($this->findMinMax($input->getArgument('numberOfElement'),$input->getArgument('sizeOfElement')));

        return 0;
    }
}