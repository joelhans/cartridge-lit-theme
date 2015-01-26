<?php
/**
 * Template Name: Chapbook/An Object You Cannot Lose
 */

get_template_part( 'chapbooks/chapbook', 'header' ); ?>

<?php

  global $post;
  $chap_path = get_template_directory_uri();
  $chap_slug = $post->post_name;

  $image_path = $chap_path."/assets/images/chapbooks/an-object/";
  $style_path = $chap_path."/assets/stylesheets/build/chapbooks/an-object/";
  $javas_path = $chap_path."/assets/javascripts/build/chapbooks/an-object/";

?>

<link rel="stylesheet" href="<?php echo $style_path; ?>an-object.min.css?v1.0">

<script src="<?php bloginfo( 'template_directory' ); ?>/assets/javascripts/build/script.min.js"></script>
<script src="<?php echo $javas_path; ?>an-object.js?v1.0"></script>

</head>

<body <?php body_class(); ?>>

  <!---------------------->
  <!-- BACKGROUNDS     -->
  <!---------------------->

  <!-- Frontmatter -->
  <div class="object-bg bg-ocean"></div>
  <!-- Open Water -->
  <div class="object-bg bg-beach"></div>
  <div class="object-bg bg-ocean-beach"></div>
  <!-- The Village of Whealbrook -->
  <div class="object-bg bg-snow-trans"></div>
  <div class="object-bg bg-snow"></div>
  <div class="object-bg bg-village-whealbrook"></div>
  <div class="object-bg bg-forest-trans-up-one"></div>
  <div class="object-bg bg-forest-one"></div>
  <div class="object-bg bg-forest-trans-down-one"></div>
  <!-- The Town of Roundbeck -->
  <div class="object-bg bg-village-roundbeck"></div>
  <div class="object-bg bg-girl-portal-one"></div>
  <div class="object-bg bg-girl-one"></div>
  <!-- Uptaten Towers -->
  <div class="object-bg bg-forest-trans-up-two"></div>
  <div class="object-bg bg-forest-two"></div>
  <div class="object-bg bg-girl-portal-two"></div>
  <div class="object-bg bg-girl-two"></div>
  <div class="object-bg bg-girl-portal-three"></div>
  <div class="object-bg bg-girl-three"></div>
  <div class="object-bg bg-girl-portal-four"></div>
  <div class="object-bg bg-girl-four"></div>
  <div class="object-bg bg-girl-portal-five"></div>
  <div class="object-bg bg-girl-five"></div>
  <div class="object-bg bg-forest-three"></div>
  <div class="object-bg bg-girl-portal-six"></div>
  <div class="object-bg bg-girl-six"></div>
  <!-- The Village of Whealbrook (II) -->
  <div class="object-bg bg-forest-trans-down-two"></div>
  <div class="object-bg bg-grass"></div>
  <div class="object-bg bg-snow-trans-down-two"></div>
  <div class="object-bg bg-snow-trans-down"></div>
  <div class="object-bg bg-village-whealbrook-two"></div>
  <!-- Coburg Castle -->
  <div class="object-bg bg-grass-river"></div>
  <!-- The Cave Where Your Father Dies -->
  <div class="object-bg bg-cave"></div>
  <div class="object-bg bg-cave-int"></div>
  <div class="object-bg bg-cave-mouth"></div>
  <div class="object-bg bg-fadeout"></div>
  <div class="object-bg bg-faded"></div>

  <!-- hover box -->
  <div class="interact-hover-box"></div>

  <!---------------------->
  <!-- FRONT MATTER     -->
  <!---------------------->

  <section class="front-matter">

  <!-- create/delete -->
  <section class="fm-create-delete fm-showing">
    <p class="interact-option fm-create">Create a new adventure log.</p>
    <p class="fm-delete interact-option-noselect">Delete an adventure log.</p>
  </section>

  <!-- keyboard -->
  <section class="fm-keyboard">
    <p class="fm-textarea"></p>
    <p class="fm-enter-name">Enter a name.</p>
    <ul class="fm-keyboard-keys-uppercase">
      <li>A</li><li>B</li><li>C</li><li>D</li><li>E</li><li>F</li><li>G</li><li>H</li>
      <li>I</li><li>J</li><li>K</li><li>L</li><li>M</li><li>N</li><li>O</li><li>P</li>
      <li>Q</li><li>R</li><li>S</li><li>T</li><li>U</li><li>V</li><li>W</li><li>X</li>
      <li>Y</li><li>Z</li>
    </ul>
    <ul class="fm-keyboard-keys-lowercase">
      <li>a</li><li>b</li><li>c</li><li>d</li><li>e</li><li>f</li><li>g</li><li>h</li>
      <li>i</li><li>j</li><li>k</li><li>l</li><li>m</li><li>n</li><li>o</li><li>p</li>
      <li>q</li><li>r</li><li>s</li><li>t</li><li>u</li><li>v</li><li>w</li><li>x</li>
      <li>y</li><li>z</li>
    </ul>
    <ul class="fm-keyboard-options">
      <li class="interact-option fm-keyboard-back">Back</li><li class="interact-option fm-keyboard-end">End</li>
    </ul>
  </section>

  <!-- creating -->
  <section class="fm-creating">
    <p>Welcome, <span class="fm-player-name"></span>.</p>
    <p>Creating adventure log<span class="fm-ellipsis"><span></p>
    <p>Do not turn power OFF or remove game card!</p>
  </section>

  <!-- title -->
  <section class="fm-title">
    <h1>An Object You Cannot Lose</h1>
    <h2>by Sam Martone</h2>
  </section>

  </section>

  <!---------------------->
  <!-- CONTENT          -->
  <!---------------------->

  <section class="content">
  <section class="container">

    <article class="story">
      <h1>Open Water</h1>
      <p>Open your eyes: it begins with you, with your awakening. You should know this by now, after all the times begun before this beginning. After you wake, check the dresser drawers. Break every pot and barrel in every room. You might find something. You do find something, some things: medicine you’ll need, seeds to plant on your tongue, clothing that some unseen force does not allow you to wear. There are bookshelves next to each dresser—check those, too, even though you are too young yet to read these heavy tomes, their gilded pages. In one room, find your father. He has a distant look in his eyes when he speaks to you. He does not yet realize what has begun, with this, your awakening, this one day. Things began for him long before this beginning. It’s different, this time, too: when you leave that comfortable space you and your father share, you find you are not in a house in a small, inconsequential village in some corner of the continent, waiting to be discovered, nor are you a subject in a powerful kingdom, the son of his majesty’s most trusted soldier, training to begin your quest. You are on a ship, which is on an ocean. You are going home, with no memory of home in tow. Open the inventory of your mind and reach in elbow deep. You scratch at your arm, a phantom memory of bug bites and muggy summers. A former home, maybe, or a home you dreamed up. You don’t remember climbing aboard this ship, or waiting for its sails to come into view on the horizon. All you can remember doing before this now, before this this, is dreaming. The ocean is undisturbed by the ship’s presence. There is no wake streaming from the sides, no sign you were ever where you just were, only endless primary blue, the color a child—a child like you—might choose for a crayon sea. In your dreams, you are in a castle. In your dreams, you remember being born. Your father is searching for something, searching for that same feeling he felt when he found you for the first time, swaddled in blankets, crying loud beside your mother. You wonder if you can affect anything at all, or if, after this story is over, more darkness will arise in the world and somewhere else, someone else, someone like you, will wake up, with only memories of dreams and the knowledge of a few certain certainties, a beginning beginning again. You feel as though you are being controlled by something avian, looking down on you from above. A tapping tangled in your hair that pushes you forward. Maybe that’s God. Maybe that’s fate. There is another dream, needling at your thoughts, one where you, an older you, travel through shimmering cities and spike-edged deserts with a man who, in your dream, you know to be your father. You try to push this from your mind, but it will not disappear. There are some objects, out there in the world, that you cannot lose, no matter how hard you try, and maybe this dream is one of those, you think. Maybe it will come in handy later. Check the dresser drawers. Break every pot and barrel, even though you know they will reappear repaired the next time you look. Break them in spite of this. Break them because of it. You might find something. Talk to everyone. If you miss what they say, talk to them again: they will repeat it all, word for word for word, just to make sure you hear it. Hear it. Look in the mirror hanging on the wall. Watch the gulls streak by above your head. Wave goodbye to the way things were before you woke.</p>
    </article>

    <article class="story">
      <h1>The Village of Whealbrook</h1>
      <p>Your father brings you to a village where everyone knows his name, where everyone has been anticipating his arrival, where everyone knows your name, too. They tell you how much you have grown, but you do not remember them, you do not remember this place. You do not tell them this. You stay silent, as you always do, as you must. You do not tell them that all you can remember doing, before the ship arrived at port, is dreaming. Maybe you were asleep when you were here before. Maybe you are asleep right now. There are strange things happening in this village, as there always are at the beginning: the world is too cold, much colder than it should be this time of year, and you realize you can’t remember ever seeing the seasons change—only in your dreams did you crouch in the cellar for cover from tornadoes, only in your dreams did you feel your feet sink into snow. Look around your house, your new house, your old house, and wonder if you will ever think of it as a home, or if, when you leave here, it will collapse in your mind, fold in upon itself, until it is reduced from a two-story structure to a single sentence, a thing you say if you ever say a thing: I lived there once. For a time. For a time, I lived there. Your father builds a bed for you, a bed to accommodate how much you’ve grown. He builds it from useless treasure he’s found on his travels, old books with thick and faded covers, hand-carved flutes no one remembers how to play. He hangs a picture of your mother on every wall. He’s been keeping secrets from you. Follow him when he leaves the house, when he leaves the village. Watch as he boards a wooden raft and floats down a stream winding snakelike into a cave. You cannot read the warning sign warning of cave-ins in this cave and inside, you cannot find your father anywhere. His raft rocks empty in the stream, he’s dropped his sword in the dust, whatever he’s been searching for has been lost. Wander back to the village. Find a stone in a well. Toss it in the air and catch it. Nothing happens. There are some objects in the world that won’t be useful until much later, until you have almost forgotten you are carrying them. This, you think, must be for later, but no: this is for now. Do not skip the wellstone across the stream. Do not swallow it, even though it is smooth, the perfect size for your child mouth. Do not throw it through the church window. Feel the weight in your pocket and remember this moment when your father is gone, when you are alone. Remember the way he looked with a hammer in his hand and nails between his teeth. Remember the way he looked when he washed your cuts and scrapes, pulled splinters from your palm, when he told you you were brave, braver than he ever could be. You find a man trapped in a tunnel. You find a secret world covered in snow, but it is not like the snow you remember, it is not like the snow in your dreams. You crawl into the bed your father built from stories and songs and his own two hands. He must have known this day would come, a day when you would fall asleep not knowing where he’d gone, not knowing if he would ever return. When you wake up, he will be where you last saw him, sipping orange juice at the kitchen table. He will tell you it is time now, it is time to go.</p>
    </article>

    <article class="story">
      <h1>The Town of Roundbeck</h1>
      <p>You go with your father to a town where he is needed, though why he is needed is unclear to you. His medicine, his sword, maybe his words. On the way, he tells you stories of your mother, the stories she never had the chance to tell you: the nights she drank until she was laughing and sick, the poems she wrote about you before there was a you to write about. You are still too young to understand what it was that took her from you. You want to believe it was an unearthly darkness extending its grip into this world, you want to believe it was nothing you did. But in your dreams you are in a castle, in your dreams you are a crying newborn bundle in her motionless arms. Everyone in this town knows your father’s name, has been anticipating his arrival. When he goes to heal or slash or speak, he leaves you with an old family friend, someone else you don’t remember because all you remember before this is dreaming. This man has a daughter, about your age, and he tells you how you played together as toddlers, but you look at her face and suddenly you remember something else: you remember growing up, you remember marrying her. You listen as she tells you her name but you hear another. She speaks to you as if you could speak back. Find a voice in your throat that wasn’t there before. She asks you questions, one after another, and though you can only answer Yes or No, you wonder if you are choosing the correct answer, or if one Yes or No in the wrong sequence could change everything, could alter your fate. Maybe there is no choice at all, maybe the wrong answer would cause the question to be repeated endlessly until you answered the way you must answer, the only way to move forward. There is a Yes. There is a No. But really, you are fated to choose one, or answer wrong for the rest of time, and you do not have time for the rest of time. Perhaps the world would make time for you, if you wanted to sit here hearing the same question from this same girl’s mouth over and over again, children forever, with no future where your father is murdered, no future where you are turned to stone and auctioned off, no future where you must confront the unearthly darkness extending its grip into this world. But then you remember growing up, you remember marrying this girl, and even though it might not happen, even if there might be another choice to make, all you can say is yes, yes, yes, and she says, Let’s go. She follows you around, or you follow her. You move together through the town, the familiar tapping tangled in your hair now bouncing the ribbon tied in hers, too. Together, look to the sky, search for something avian, for something looking down at you from above. Bother the man who runs the weapon shop, buy a shield too big for your small arms to hold up in front of your heart. Rescue the stray cat with teeth like daggers, name it like you would a child. In the pub, before you both are asked to leave, too young to be in here, the waitress in the bunny costume tells you that girl will be a right looker in a few years time—a few years that will pass like a dark screen between scenes. We’ll meet up later, the girl says, the girl with the name that reminds you of another, and she runs off, leaving you with no choice to make, no voice to be found, no chance of taking the wrong path. You press your thumb to your shirt’s top button, silently answer a question no one asked.</p>
    </article>

    <article class="story">
      <!-- images -->
      <img class="uptaten-towers" src="<?php echo $image_path.'uptaten_towers.png'; ?>" />
      <!-- text -->
      <h1>Uptaten Towers</h1>
      <h2>HER HAND IS A TOWER IN THE DARK</h2>
      <p>A hand over your mouth. A hush in the darkness. It’s the girl, whose name reminds you of another, who you remember marrying in some uncertain future or almost-forgotten dream. She is unaware that, even if her palm was not curled around your lips, you would not be able to speak unless she asked you a question. She tells you it is time. Your father stirs and coughs beside you in his stiff inn bed. He rolls over, his swamp-monster snores resume. He fell ill before you could leave town, before you could return to your village. Now, here she is, to steal you away from the inn, from him, in the middle of the night, her hand firm over your ever-silent boy mouth. Here she is.</p>
      <h2>HER HAND IS A WEAPON, AND ALSO A GAUNTLET</h2>
      <p>Outside the town, it feels like this night could last forever. Maybe it could. Walk carefully through these forests, through the fields and mountain ranges. This is your first adventure without your father to guide you, and it could be your last, too. Look at the map hovering above you, most of its topography still darkened, a silhouetted world—you will chart the landscapes in your head, illuminate each region as you travel through it. Don’t get lost. Figure out the best routes. There are creatures that emerge from darkness. There are poison bogs that make your eyes flash purple. You have heard stories of fights, of teeth knocked out, of shadowy gangs ganging up on lone travelers, tipsy tavern frequenters stumbling directionless, but she will protect you: you raise your club and she draws her knife, but she is stronger than you, you notice already, you feel it in her grip, you see it in the numbers appearing above her head. She has heard stories of a haunted castle in the north, and that’s where you are going, where you must go, where she says she wants to take you when she squeezes your hand in hers.</p>
      <h2>HER HAND IS A MONSOON, HER FEET ARE FALLEN TOWERS</h2>
      <p>When you arrive, there is a strange familiarity to the place, those turrets towering at each corner—but all castles look the same, especially from the outside. The iron latches on the heavy wooden doors are rainworn, rusted shut, but she points to the back. You find a way in, stones missing at the foot of a tower, an opening large enough for your small bodies to crawl through. You watch her feet disappear into the dark, and it begins to rain, to pour. Lightning cleaves the night. A storm. Remember a word from your dreams: monsoon. You are not sure if it is the correct word for this, this rain from nowhere, if you are in the right region for this word to be the right word to use. You want to reach in and touch her ankle, to have her crawl back out, but she is too far away for your fingers, stretched to their very tips. You want to run for home through puddles with her. You want to see what her hair looks like wet.</p>
      <h2>HER HAND IS A GHOST</h2>
      <p>Inside, in the darkness your eyes cannot see through, statues come to life, coffins fall open, ghosts waltz, bump into you, miss a step, step on your heel. You cannot see anything. You cannot see her, behind or in front of you. This place, it may as well be a cavern. It may as well be a labyrinth, a dungeon, a lair where something lurks, waiting just for you. Do not be afraid. Light your torch. A beautiful pale light will shine from it, illuminating your surroundings, she has been next to you the whole time, tugging at your shirt. Do not be afraid. If you fall through the floor, you will wake up beside her, buried alive in the blankets of your bed. Do not be afraid. If you collapse from exhaustion, she will drag you to the inn, and you can return here again on another endless night, an endless night that will keep recurring—like a dream—until you find what is waiting for you at the end. You can hear a song playing somewhere, a phantom melody, and you feel like you could sing it if only you remembered the words.</p>
      <h2>HER HAND IS A YELLOW RIBBON SHE TIES IN YOUR HAIR</h2>
      <p>Think of all you have acquired: Six hours alone with her, maybe a week, maybe years, if you managed to make this night last that long. Magic on your fingertips, on hers, too. A separation you hope will be temporary. A silver tea set and a golden orb, your father’s stern face reflected in both. As you begin your journey home, your father will tell you that you must never do that again, that there is danger in this world. But you know this. You have seen it, and though you promise him never, you know, even now, a time will come when you will. Now, look back to the town entrance where, between the guards’ towering stances, there she is, waving her hand in a wave to you, for you, back and forth, until she is out of sight.</p>
    </article>

    <article class="story">
      <h1>The Village of Whealbrook (II)</h1>
      <p>You return with your father to the village where everyone knows his name, where everyone knows your name, too. It is the same as when you left: the landscape unaltered, the houses in familiar places, the villagers repeating what they said to you before, not a word out of order. For a moment you thought you might return and find everything changed, walls fallen, foundations uprooted, your name forgotten, but no: you are home. Strange things are happening in this village, as there always are at the beginning: books moved from table to floor, a vanished wine glass, unknown names scrawled in the hotel guestbook. Outside, it is still colder than it should be this time of year. That is when you notice him, the man who was not here before, the only person who seems out of place, out of time. He is standing outside the church. He wears a tattered blue cloak. His arms and face are covered in scratches and scars, bruises and burns. There is something familiar, something funhouse-mirror about him—he looks almost like your father as a young man, but there’s something else, too. He has a voice, a voice unlike yours, one that knows how to say words besides Yes or No. He asks to see the glittering orb you found in the tower. Show it to him, but only for a moment. Do not be distracted. Watch for any sleight of hand. When he gives it back to you, he tells you to take care of your father, he tells you not to give up, and then he is gone. Here, in this village, at this moment, it is easy to take care, there is nothing to give up. If you look into the orb, its golden hemispheres seem dulled, and if you squint, you can almost see yourself, an older version of you, dehydrated in a desert city, waiting for a bus to come. No one else can see the things you can. Return again to the secret place you found before, that small pocket of a universe, that place covered in snow, the source of all this cold. Learn to pick locks. Navigate palaces of ice. Find the flute that can bring spring to the world. As you put the instrument to your mouth and begin to play the tune lying dormant in your fingertips, you realize what was so familiar about the man outside the church: something in his brow and nose was like your father, yes, but his eyes, his lips—they matched the woman in the photographs framed throughout your house, they were your mother’s. The ice palaces with their frozen locks melt into floods and chill your ankles. Leave this secret place, wet and renewed, with a certain certainty you will return someday. In the village, spring has finally come, the air is warm. You don’t understand who that man was, where he came from, where he went, but something has been set in motion. Something has been fulfilled. Something in the world is trembling. You find yourself suddenly afraid that the season you have heralded will be too hot for you to live through.</p>
    </article>

    <article class="story">
      <!-- images -->
      <img class="coburg-castle" src="<?php echo $image_path.'coburg_castle.png'; ?>" />
      <!-- text -->
      <h1>Coburg Castle</h1>
      <h2>SUMMONS</h2>
      <p>Your father has been summoned to a castle. By now, you’ve probably noticed all your stories begin this way: with your father. Don’t worry. There is an end coming to that. Soon, there will be no more stories beginning that way, though you will retell the old ones again and again in your head, beginning always and forever with him. Your father is summoned to a castle, and he brings you along. It will be just a little trip, your father says, Nothing like the sea journey before. But you don’t remember the sea journey. All you remember doing, before the ship arrived at port, is dreaming. In your dreams, you packed all your belongings into a car, a futon like a useless blue tongue unrolled on top, and drove across an unknown landscape. Your father was not a warrior, and your mother you’d always known. There was a girl you wanted to marry who traveled in the opposite direction. After this excursion, your real father says, we’ll settle down for a while. You are not sure you believe him. Try to make sense of all the lives you’ve led asleep, summon to mind the sum of all your dreaming, an answer to a question that isn’t Yes or No. Try to begin a story that begins somewhere else.</p>
      <h2>CHECKPOINT</h2>
      <p>At the checkpoint on the river, the guards know your father’s name, they have been expecting him, they let you pass. Your father takes you to the top of the turret, to see the view of the river below, the mountain ranges in the distance. Look at that, your father says, Beautiful. But you are looking at an old man who is looking at the water. He says he’s watching the river flow, thinking of what the future holds for the kingdom. You look over the railing, and swirling there in the green rush of water, you see your future, all your possible futures, darting past like fish. There is one where you trudge through snow, one where you sweat in the desert, several where you have learned to speak. There is one where you fall in love with the girl who wears a yellow ribbon. There is one where you fall in love with a different girl, one you don’t recognize, with angles cut into her hair like schematics. There is one where you fall in love with someone else, a girl who has not come into focus, whose face blurs and ripples. There are so many where your father has vanished from your life, and a few where your mother never did. There is one where you sit in an unfurnished apartment, a place you recognize but are sure you’ve never visited, your mother and father familiar but not the mother and father you know to be yours. They are helping you put together furniture. They are helping you prepare for a new beginning. Maybe these are futures that will never happen, maybe these are lives you will only live in your dreams, but you want to dive in and grab one in all its slippery uncertainty. You want to lift it from the river, pocket it before it can slip slimily through your fingers, vanishing into the deep.</p>
      <h2>CASTLE</h2>
      <p>There is a strange familiarity to this place, but all castles look the same, especially from the outside. While your father talks to the worry-eyed king, explore the castle. By now, you should know what to do. Check dresser drawers. Break pots and barrels. Talk to everyone. If you miss what they say, talk to them again: they will repeat it all, word for word for word. In your dreams, things people tell you never give shape to a story, there are always ambiguities and secrets concealed. But here, every piece of information adds up, every word illuminates another until the picture becomes clear, a certain future looming ahead of you. It is something out of a fairy tale: a stepmother who wants her son to take the crown, a cook who witnessed her conspiring with unsavory characters, rumors of kidnappers roaming in the region just north of here, rumors of a hidden hideout, of a cave, of ruins. You find the prince, the queen’s stepson, and he has not noticed his father’s sunken cheeks, his sallow skin. He is too busy placing frogs on servants while they sleep, shattering bottles containing ships, demanding more cookie-dough ice cream, more sweets to make his teeth go numb. When you aren’t looking, he sneaks through a trapdoor in his room. Follow him down, down, down. You can guess what will happen next. Make it to the first floor just in time to watch everything begin at this, the perfect coincidence, the moment when your future is determined, the moment when everything you’ve been anticipating comes true. The men wear masks. They pick up the prince and cover his mouth, make him silent as you. They escape through a side entrance, make their getaway on a raft in the moat. Go, go and get your father, though you remember seeing this future in the river, you remember how this ends.</p>
      <h2>RUINS</h2>
      <p>When you tell your father what happened, he sets out to follow the kidnappers. He tells you to stay here, safe. Ignore him. Follow your father’s path north to a cave. Inside the cave, you see it is not a cave at all, but ruins, remnants of a crumbling once. There is no choice you can make here, no safety you can pluck from a river’s current, time’s flow will only erode the way it wants to. Follow your father’s voice. Find where he is fighting, where he is caught in clouds of ancient dust his kicking has kicked up. He will be surprised you made it here on your own. Fight by his side and make your way deeper into the cave, where the prince is trapped in an iron cell. Your father will break down the barred door. It will look like this story is ending, but no, not yet: there is an ending lying in wait for you. When your father stays behind to fight off the hordes that stream from hidden fissures in the wall, run with the prince, make your way back toward the day, toward the sun shining into the mouth of the cave like a dentist’s operating light when you are just coming to, when you are just beginning to see through the fog of nitrous oxide, when your lungs open with oxygen and you remember who you really are. No matter how fast you run, know this: a backlit figure will block your path. All possible futures will be eclipsed. You will live through this, yes, for you must if the story is to continue, and so will the prince, for he must redeem himself, and you will need a companion, someone to take up arms beside you. You think you hear frantic tapping somewhere above you, like fingers on buttons trying to make something happen, but it is just your father’s footsteps echoing fast behind you. He is rushing to your aid. You want to tell him to turn back, to not be a warrior, to be something safe instead, safe and home and nestled in your dreams. But there is no choice to make here, no action you can take, only a fight you cannot win, a laughter that drains your life, a shadow foreshadowing what violence is yet to come. Maybe it was planned from the start. Maybe there is only one path to follow. Maybe this is destiny. You feel something wriggling in your pocket, and it turns out a future is not like a fish: it can grow legs and lungs, it can devour itself, it can get away from you forever.</p>
    </article>

    <article class="story">
      <h1>The Cave Where Your Father Dies</h1>
      <p>This is not the cave where you find the man trapped, where you move the boulder off his leg to save him. This is not the cave where magma molts from the walls, scorches your feet if you make a wrong step. This is not the cave where, hidden behind a waterfall, you find a suit of armor that smells of sulfur, that will protect your heart. This is the cave where a man holds a scythe at your throat, to the throat of the crying prince. This is the cave where two men attack your father. This is the cave where your father will die. This is the cave where your father died. This is the cave where your father dies, the cave where your father is dying, where you can do nothing to save him, where he is in a state of almost-death, always. In your dreams, your father is safe at home with your mother, who you’ve always known. In your dreams, your father is writing you a postcard, a photograph of ruins on the front. These ruins. Crumbling pillars crumbling. Cracked pedestals cracking. Your father faltering, falling to his knees in this, the cave where he will die, where he has died, where he is dying as you watch, unable to move. Maybe you thought there would be a choice you could make. Maybe you thought if you rushed past every treasure chest, ran from every fight, you would make it out in time. Or maybe you thought if you found every hidden artifact, cut open the chest of every slain beast, you would find an object that would save him, an item you could use now, now, now. Or maybe you remembered the way all the other beginnings began and considered yourself lucky: for having someone, for not being alone, not just yet, though you must have known the day would come, that this cave would come, these ruins, a postcard with last words scrawled across the back. There is a scythe at your throat. There are men striking your father in the face, in the gut. There is nothing he can do but endure until he can’t. Do not think about how your being here is the cause of his undoing. It will not change anything. Memorize the faces of your father’s murderers, though know that as you grow older, they will transform, your mind will mutate them into horrific masks: a horse’s sneering muzzle, a hog’s gnarled tusks, the tongue and skin of something cold-blooded and reptilian. There is nothing you can do to stop this: a fierce fire will turn your father into smoke. A golden orb will be shattered. A purple fog will surround you, transport you away from here, this place, these ruins, this cave where your father dies. But before all this, your father will tell you what he has been searching for, in all the caves and castles and rivers of the world. Not an indestructible sword, not a necklace too heavy for the wearer to remove, not a collection of miniature medals to deliver to a manic medal-collecting king. He has been searching for the woman he loves. He has been searching for your mother. In your dreams, you are in a castle. In your dreams, you remember being born. In your dreams, you are a crying newborn bundle in her motionless arms. But in other dreams, your mother and father are together. In these dreams, they have never been apart. In these dreams, if your dream-self dreams up a world more like this one, a world where they have been separated, where something has placed them on indeterminate coordinates on a map, every region mysterious, silhouetted, unknown, your dream-self begins to cry. Here, certain you are awake, certain your father is about to die, promise yourself you will find her, even if her presence in the world is a lie he’s telling to give you hope, a lie he’s told himself so many times he’s come to believe it. The man with the scythe at your throat hisses in your ear. He calls forth a mighty flame. He crushes the sphere into dust in his hand. The men and the prince and you are engulfed in purple fog. Close your eyes. Wish to be someplace else. Step outside your apartment and get sand in your mouth. The sky has gone a pale yellow. A dust storm is on the horizon. You miss the monsoon season. Check your mailbox and find today’s postcard, just delivered. Place it on the shelf above your kitchen counter alongside all the others. Dread a future where you’ll find the mailbox empty of words, of whereabouts, of pictures depicting all the picturesque places he has been.</p>
    </article>

  </section>
  </section>

  <!---------------------->
  <!-- BACK MATTER      -->
  <!---------------------->

  <section class="back-matter">

  <section class="bm-continue">
    <p>Do you intend to continue on your quest at this point, my child?</p>
    <ul class="bm-continue-options">
      <li class="interact-option bm-yes">Yes</li><li class="interact-option bm-no">No</li>
    </ul>
  </section>

  <section class="bm-sure">
    <p>Are you sure?</p>
    <ul class="bm-sure-options">
      <li class="interact-option bm-yes">Yes</li><li class="interact-option bm-no">No</li>
    </ul>
  </section>

  <section class="bm-respite">
    <p>Very well. May you be granted a peaceful respite.</p>
  </section>

  <section class="bm-acknowledgments">
    <h1>Acknowledgments</h1>
    <p>Special thanks to the editors who first gave homes to portions of this chapbook: Matthew Clair, Jason Jordan, Brandi Wells, Brandon Hobson and Cooper Renner, Steve Himmer, Edward Mullany and Brian Mihok, and especially Lauren Becker, whose brief but significant encouragement ensured these pieces numbered beyond two.
    <p>Thanks as always to my writing buddies and trusted readers Lyndsey Reese and Rebecca King and to my parents for buying me that very first Game Boy.</p>
    <p>I am totally indebted to Brian Oliu and his video game writing, without which I don’t think I would’ve ever written <em>An Object You Cannot Lose</em>, or even considered it a possibility.</p>
    <p>The sections of this chapbook originally appeared in slightly different form in the following journals: “Open Water” as “Wake” in the <em>Diverse Arts Project Journal</em>, “The Village of Whealbrook” in <em>Corium Magazine</em>, “The Town of Roundbeck” in <em>decomP</em>, “Uptaten Towers” in <em>Hobart</em>, “The Village of Whealbrook (II)” in <em>elimae</em>, “Coburg Castle” in <em>Necessary Fiction</em> and “The Cave Where Your Father Dies” in <em>matchbook</em>.</p>
  </section>

  </section>

  <section class="flood"></section>

<?php get_template_part( 'chapbooks/chapbook', 'footer' ); ?>
