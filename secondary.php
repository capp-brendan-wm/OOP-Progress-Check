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
                gamedetails :: set_game ($gamename);
            }
        }
    }
?>