<div class=" md:flex h-[100vh] flex justify-around pt-[10vh] w-full md:flex-row flex-col">
<div>
    <a href="https://bayeux.tech/projects">
<p class="text-[var(--darkblue)] min-w-[50vw] mt-[5vh] pt"><< Voltar ao Portfolio</p> 
<p class="text-[var(--darkblue)] min-w-[50vw] mt-[5vh] en"><< Back to Portfolio</p>
<p class="text-[var(--darkblue)] min-w-[50vw] mt-[5vh] es"><< Voltar a la Portfolio</p><br>   
</a>
<figure class="w-full p-4 md:w-[54vw] border border-white  ">
    
<video controls>
    <?php 


$json = json_decode(file_get_contents("https://bayeux.tech/portfolio/media/main.json"), true, JSON_FORCE_OBJECT);
$project = $json[$_GET["project"]];
?>
<source src=<?php
echo '"'.$project["url"].'"';
?> type="video/mp4">
Your browser does not support videos.
</video>

</figure>
</div>
    <div class="min-w-[30vw]">
        <br>
        <ul class="pt text-white text-center md:text-left md:max-w-[30vw] p-4 md:p-2 float w-full right-[0] z-[9999]">

      
            <?php

            ?>
              <p class="
    text-[3rem] 
    md:text-[3.5rem]
    lg:text-[3.8rem]
    2xl:text-[4.2rem]
    font-[ubuntu]
    text-black
    whitespace-nowrap
    " style="
    -webkit-text-stroke: 1px var(--darkblue);">
           <?php echo strtoupper(array_search($json[$_GET["project"]],$json)); ?>
        </p>

        <?php
        
        $projectdesc = $project["desc"];
         echo "<p class='text-white'>". strtoupper($projectdesc)."</p><br>";
            if (isset($project)) {

                $elInput = `ac$i`;
                for ($i = 1; $i <= $project["infoQty"]; $i++) {


                    $title = explode(":", $project["info$i"])[0];

                    $description = explode(":", $project["info$i"])[1];

                   
            ?>
                    <li class="pt link border text-left p-6 border-[#616161] border-solid w-full leading-relaxed pt"
                        
               <?php
                    echo "onclick='elToggle(\"ac$i\", \"animation-disappearSize\", \"animation-appearSize\")'";
                ?>
                >


                        <?php echo $elInput ?>
                        <?php echo $title ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-left googleIcon" viewBox="0 -960 960 960">
                            <path fill="#616161" d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                        </svg>
                    </li>

                    <div <?php echo "id='ac$i'" ?> class="pt w-full dropdown animation-disappearSize text-sm text-base font-trispace leading-relaxed font-light">
                        <?php echo $description ?>
                    </div>
                    <br>
            <?php

                }
            }
            ?>

        </ul>
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>

<script src="../js/main.js"></script>