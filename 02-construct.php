<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body class="flex min-h-[100vh] justify-center items-center text-white">
    <main class="bg-black/50 h-[600px] w-[380px] rounded-3xl">
        <header class="flex justify-center items-center py-5 gap-5 bg-black rounded-t-md">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-yellow-400 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>                  
            </a>
            <h1 class="text-2xl">Construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
        <?php
        class PlayList {
        // Atributes
        private $name;
        private $artist = Array();
        private $album = Array();
        private $cover = Array();
        private $year = Array();
        // Methods  
        public function __construct($name) {
            $this->name = $name;

         }  
         public function setPlaylist($artist, $album, $cover, $year ) {
            $this->artist[] = $artist;
            $this->album[] = $album;
            $this->cover[] = $cover;
            $this->year[] = $year;
         }
         public function getPlayList(){
            echo "<div class='p-2 ring-1 ring-white/80 rounded-md'>
                        <h2 class='text-center text-2xl my-4'>$this->name</h2>";
                        for($i = 0; $i < count($this->artist); $i++){
                        echo "<div class='p-2 mb-4 text-white/80 flex-col gap-4 bg-black/40 rounded-md'>
                        <p>".$this->album[$i]."</p>
                        <img src='".$this->cover[$i]."' alt='Cover' widt='280px'>
                        <p>".$this->artist[$i]."</p>
                        <p>".$this->year[$i]."</p>
                        
                        </div>";
                    }
                    "</div>";
        }
       } 
       $myPlaylist = new PlayList('Favorite Music');
       $myPlaylist->setPlayList('Billie Eilish', 'Happier than Ever', 'https://tinyurl.com/3h83v65e', 2021);
       $myPlaylist->setPlayList('Doja Cat', 'Planet her', 'https://tinyurl.com/mccd89bh', 2021);
       $myPlaylist->setPlayList('Arctic Monkeys', 'AM', 'https://tinyurl.com/yp5rz3k8', 2013);
       $myPlaylist->setPlayList('Dua Lipa', 'Future Nostalgia', 'https://tinyurl.com/bde6yd88', 2020);
       $myPlaylist->setPlayList('Zoe', 'Reptilectric', 'https://tinyurl.com/33c7z46r', 2008);
       $myPlaylist->setPlayList('Conan Gray', 'Kid Krow', 'https://tinyurl.com/348myzu9', 2020);
       $myPlaylist->getPlayList();


        ?>
            
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>