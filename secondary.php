<?php
    class gamedetails {
        public $game;
        public $genre;
        public $platform;
        public $price;

        function __construct ($game, $genre, $platform, $price) {
            $this -> game = $game;
            $this -> genre = $genre;
            $this -> platform = $platform;
            $this -> price = $price;
        }

        function set_game ($game) {
            $this -> game = $game;
        }

        function get_game () {
            return $this -> game;
        }

        function get_genre () {
            return $this -> genre;
        }

        function get_platform () {
            return $this -> platform;
        }

        function get_price () {
            return $this -> price;
        }
    }

    class gameupdates extends gamedetails {
        public function set_game ($game) {
            if ($game == "Counter Strike Global Offensive" || "League of Legends") {
                $this -> game = $game;
            }
            else if ($game == "Counter Strike Global Offensive" || "League of Legends") {
                gamedetails :: set_game ($game);
            }
        }
    }

    class gamestatistics extends gameupdates {
        public static $game_code = 10;

        public static function game_validation ($id) {
            if (strlen($id) >= self::$game_code) {
                return true;
            }

            else {
                return false;
            }
        }
    }

    $id = "1234567891";

    if (gamestatistics::game_validation($id)) {
        echo "This game code is valid";
    }

    abstract class gamerating extends gamedetails {
        public $name;
        public $rating;

        public function name () {
            return $this -> name . "gave the game a rating of" . $this -> rating;
        }

        abstract public function date ();
    }

    class leaguerating extends gamerating {
        public function rating () {
            return parent::name ();
        }

        public function date () {
            return "The game was rated on 3/6/2016";
        }
    }

     class counterrating extends gamerating {
        public function rating () {
            return parent::name ();
        }

        public function date () {
            return "The game was rated on 3/10/2016";
        }
    }

    $lrating = new leaguerating ("League of Legends", "moba", "PC", "standard");
    $lrating -> name = "Ryan ";
    $lrating -> rating = " 10/10";

    $crating = new counterrating ("Counter Strike Global Offensive", "shooter", "PC", "cheap");
    $crating -> name = "Merp ";
    $crating -> rating = " 10/10";

    class leaguecharacters {
        public $character_1 = "Lucian";
        public $character_2 = "Master Yi";
        public $character_3 = "Katarina";

        function characters () {
            foreach ($this as $character => $object) {
                print "$character => $object\n";
            }
        }
    }

    $lcharacters = new leaguecharacters ();

    class counterguns {
        public $gun_1 = "Assault";
        public $gun_2 = "Submachine";
        public $gun_3 = "Sniper";

        function guns () {
            foreach ($this as $gun => $weapon) {
                print "$gun => $weapon\n";
            }
        }
    }

    $cguns = new counterguns ();

    final class storage {
        public function storage_req () {
            echo "There storage requirements are very large";
        }
    }

    $storage = new storage ();
?>