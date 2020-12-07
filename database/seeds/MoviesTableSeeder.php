<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("movies")->insert([
        [
            "genre_id" => 1,
            "title" => "Moon Lovers: Scarlet Heart Ryeo",
            "photo" => "Scarlet Heart Ryeo.jpg",
            "description" => 'During a total solar eclipse, a 25-year-old 21st-century woman, Go Ha-jin (Lee Ji-eun),
             is transported back in time to the Goryeo Dynasty. She wakes up in the year of 941 in the body of Hae Soo,
              among the many royal princes of the ruling Wang family during the reign of King Taejo. She initially falls
               in love with the gentle and warm-hearted 8th Prince Wang Wook (Kang Ha-neul), and later Wang So (Lee Joon-gi),
                the fearsome 4th Prince who hides his face behind a mask and is given the derogatory label of "wolf dog". 
                As the story develops, Hae Soo finds herself unwittingly caught up in palace politics and the rivalry among 
                the princes as they fight for the throne.',
            "rating" => 5
        ],
        [
            "genre_id" => 1,
            "title" => "Boys Over Flowers",
            "photo" => "Boys Over Flowers.jpg",
            "description" => "Despite being poor, Jan-Di, a bright girl, transfers to an exclusive high school meant only for the elites. 
            Here, she crosses paths with four of the richest boys and falls in love with one of them.",
            "rating" => 3.5
        ],
        [
            "genre_id" => 1,
            "title" => "Descendants of the Sun",
            "photo" => "DescendantsoftheSun.jpg",
            "description" => "A love story between Captain Yoo Shi Jin, Korean Special Forces, and Doctor Kang Mo Yeon, surgeon at Haesung Hospital. 
            Together they face danger in a war-torn country.",
            "rating" => 4
        ],
        [
            "genre_id" => 1,
            "title" => "Persona",
            "photo" => "Persona.jpg",
            "description" => "An exploration of different personas in an eclectic collection of four works by critically acclaimed Korean directors.",
            "rating" => 4
        ],
        [
            "genre_id" => 2,
            "title" => "Spongebob Squarepants",
            "photo" => "Spongebob Squarepants.jpg",
            "description" => "A yellow sea sponge named SpongeBob SquarePants, who enjoys being a cook at Krusty Krab, lives in the Pacific Ocean. He embarks on various adventures with his friends at Bikini Bottom.",
            "rating" => 4.5
        ],
        [
            "genre_id" => 2,
            "title" => "Teen Titans GO",
            "photo" => "Teen Titans GO.jpg",
            "description" => 'This follow-up to the popular "Teen Titans" series takes a more comedic look at the superheroes, 
            showing what life is like for the teens when their capes come off. Funny things happen to Robin, Starfire, Raven, 
            Beast Boy and Cyborg between saving the world and being regular teens, living together without adult supervision. 
            The teens, in their ordinary lives, deal with the everyday issues of adolescence that include such important things
             as having staring contests to determine who does the laundry and going on a series of quests to construct the perfect sandwich. 
             But, of course, the heroes still fight crime in Jump City when the need arises. Whatever the situation, they are always ready 
             for an adventure -- inside the house or out of it.',
            "rating" => 2.5
        ],
        [
            "genre_id" => 2,
            "title" => "We Bare Bears",
            "photo" => "We Bare Bears.jpg",
            "description" => "Three brother bears awkwardly attempt to find their place in civilized society, whether they're looking for food, trying to make human friends, or scheming to become famous on the internet. Grizzly, Panda and Ice Bear stack atop one another when they leave their cave and explore the hipster environs of the San Francisco Bay Area, and it's clear the siblings have a lot to learn about a technologically driven world. By their side on many adventures are best friend Chloe (the only human character in the cast), fame-obsessed panda Nom Nom, and Charlie, aka Bigfoot.",
            "rating" => 3.5
        ],
        [
            "genre_id" => 2,
            "title" => "Oggy and the Cokroaches",
            "photo" => "Oggy and The Cokroaches.jpg",
            "description" => "Lazy cat Oggy loves to watch TV and eat food. However, his flatmates, who happen to be three tiny cockroaches, enjoy attacking Oggy's refrigerator and creating a messy situation.",
            "rating" => 3.5
        ],
        [
            "genre_id" => 3,
            "title" => "Heroes",
            "photo" => "Heroes.jpg",
            "description" => "When some ordinary people inexplicably develop superhuman abilities, they use their powers to prevent catastrophes and save humanity from destruction.",
            "rating" => 3.5
        ],
        [
            "genre_id" => 3,
            "title" => "Vikings",
            "photo" => "Vikings.jpg",
            "description" => "Ragnar Lothbrok, a legendary Norse hero, is a mere farmer who rises up to become a fearless warrior and commander of the Viking tribes with the support of his equally ferocious family",
            "rating" => 4
        ],
        [
            "genre_id" => 3,
            "title" => "The Chronicles of Narnia",
            "photo" => "The Chronicles of Narnia.jpg",
            "description" => "During the World War II bombings of London, four English siblings are sent to a country house where they will be safe. One day Lucy (Georgie Henley) finds a wardrobe that transports her to a magical world called Narnia. After coming back, she soon returns to Narnia with her brothers, Peter (William Moseley) and Edmund (Skandar Keynes), and her sister, Susan (Anna Popplewell). There they join the magical lion, Aslan (Liam Neeson), in the fight against the evil White Witch, Jadis (Tilda Swinton).",
            "rating" => 4.8
        ],
        [
            "genre_id" => 3,
            "title" => "The Final Table",
            "photo" => "The Final Table.jpg",
            "description" => "\"The Final Table\" is one of the most ambitious culinary competitions in the genre. The first season features 12 pairs of chefs from around the world preparing national dishes from a number of nations, including Mexico, Spain, England, Japan, India and the U.S. Each episode puts the focus on a specific country, with celebrity ambassadors, food critics and the country's greatest chef judging the competitors and eliminating the least successful duo. In the season's 10th and final episode, the remaining teams break up, with the finalists competing as solo players to create distinctive signature dishes for the panel of all nine legendary chefs. When it's all said and done, only one hopeful earns the show's ultimate prize -- a spot at the table with the nine culinary icons.",
            "rating" => 4.1
        ]]);
    }
}
