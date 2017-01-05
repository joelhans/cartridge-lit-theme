<?php
/**
 * Template Name: Chapbook/Tender Glories
 */

get_template_part( 'chapbooks/chapbook', 'header' ); ?>

<?php

  global $post;
  $chap_path = get_template_directory_uri();
  $chap_slug = $post->post_name;

  $image_path = $chap_path."/assets/images/chapbooks/tender-glories/";
  $style_path = $chap_path."/assets/stylesheets/build/chapbooks/tender-glories/";
  $javas_path = $chap_path."/assets/javascripts/build/chapbooks/tender-glories/";


?>

<link rel="stylesheet" href="<?php echo $style_path; ?>tender-glories.min.css?v1.0">

<script src="<?php bloginfo( 'template_directory' ); ?>/assets/javascripts/build/script.min.js"></script>
<script src="<?php echo $javas_path; ?>tender-glories.js?v1.0"></script>

</head>

<body <?php body_class(); ?>>

<div class="clickable"></div>

<section class="images">
  <img class="toc" src="<?php echo $image_path; ?>toc.png" />
</section>

<section class="container">

  <nav class="tg-fm">

    <h1 class="tg-title">Tender Glories</h1>

    <h2 class="tg-author">K. Jane Childs</h2>

  </nav>

  <section class="tg-toc">
    <ul>

      <li>Curses &amp; Spells
          <ul>
            <li>So You Want to be a Hero
              <ul>
                <li>Baba Yaga: A (R)end(er)ing</li>
              </ul>
            </li>
          </ul>
        </li>
      </li>

      <li>Quiet Girls
          <ul>
            <li>Trial by Fire
              <ul>
                <li>Zayisha: A Retrospective</li>
              </ul>
            </li>
          </ul>
        </li>
      </li>

      <li>(Un)quiet Grrls
          <ul>
            <li>Wages of War
              <ul>
                <li>Kreesha: An Alternate Reading</li>
              </ul>
            </li>
          </ul>
        </li>
      </li>

      <li>Femme Fatales
          <ul>
            <li>Shadows of Darkness
              <ul>
                <li>Katrina: A Reckoning</li>
              </ul>
            </li>
          </ul>
        </li>
      </li>

      <li>(M)Others
          <ul>
            <li>Dragon Fire
              <ul>
                <li>Erana &amp; Zara: A Revisioning
                  <ul>
                    <li>Elsa: A Reorientation</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </li>

    </ul>
    <span class="clicky">For the full experience, point-and-click your way through. Explore a little.</span>
  </section>

  <!-- TENDER GLORIES / CURSES & SPELLS -->
  <section class="tg-section tg-curses-spells">

    <header>
      <h1>Curses &amp; Spells</h1>
    </header>

    <article class="tg-pixel">
      <h1>So You Want to be a Hero</h1>
      <p>In an idyllic alpine valley sits the barony of Spielburg, where ten years ago the ogress Baba Yaga laid a curse on the Baron for trying to drive her away. Both of the Baron’s children have been missing since that time. Hope for Spielburg exists in the form of a poetic prophecy:</p>
      <p class="tg-center">Comes a Hero from the East</p>
      <p class="tg-center">Free the Man from in the Beast</p>
      <p class="tg-center">Bring the Child from out the Band</p>
      <p class="tg-center">Drive the Curser from the Land</p>
      <p>After diligent study via a correspondence course on how to become a hero, you have set out to prove your worth by tackling the difficulties in Spielburg. Can you break the curse? Can you locate the Baronet, Barnard, and his sister Elsa von Spielburg? Will you defeat Baba Yaga and the Brigands that plague the valley, proving yourself a hero, or will you perish (perhaps even many times) trying?</p>
    </article>

    <img class="mountain" src="<?php echo $image_path; ?>mountain.png" />

    <article class="tg-clean play-man">
      <h1>I Play as a Man</h1>
      <p>When I was a kid, my older half-brother would come home from college at Christmas and bring us computer games. The first Sierra adventure games I played were from the King’s Quest series, but it wasn’t long before my younger brother and I discovered the Quest for Glory games. Over the three decades of my life so far, I have played through the five game series dozens of times. If I played as a Paladin, I named myself Percival or Galahad. When I was a Thief, I went by Dodger or Jimmy the Hand. I seldom played as a Wizard or Fighter, unless I was working toward becoming a Paladin. Always, because of the nature of the games, I played as a man. I rescued Elsa von Spielburg from Baba Yaga’s curse, helped Zayishah, daughter of the Emir, escape from Raseir, broke Johari out of her spelled cage in the Simbani village, met the mysterious Katrina outside the gates of the town of Mordavia after nightfall, and traveled to the underworld through a portal on the island of Marete in order to bring the mage Erana back from the dead. I practiced honor or stealth, fell in love and had adventures, learned bits of foreign language and folklore, but all as a blond man with no history or story of his own, no name until you name him, and no desire except what his character type grants him.</p>
      <figure>
        <img alt="Elsa (I)" src="<?php echo $image_path; ?>/portraits/elsa.png" />
        <span>Elsa (I)</span>
      </figure>
      <p>Before Baba Yaga’s curse, before abduction and brigandry, as a small girl strong from riding horses I hide behind the stable to watch the swordmaster instruct my brother. See parry, think parry, learn parry. Dust rising from the earth pounded by feet—advance and retreat—more urgent than the dance steps demonstrated to me in the afternoon. Only Yorick, the fool, knows about my denied request for instruction. The pompous poltroon’s sneering dodge: “wasted on a woman.” Few women in the castle, mother lost the moment gained, I dance behind the stables, in the shadow of the barracks, in empty wings of Spielburg Castle, imagining myself a sword.</p>
    </article>

    <img class="sky" src="<?php echo $image_path; ?>sky.png" />

    <article class="tg-pixel">
      <figure>
        <img alt="Baba Yaga" src="<?php echo $image_path; ?>/portraits/baba.png" />
      </figure>
      <h1>Baba Yaga: A (R)end(er)ing</h1>
      <p>So, what should we tell them, pets? That they don’t know already. Heroes know so much.</p>
      <p>The Baron? Pah. Don’t talk to me about that fool. He and his son tried to run me out of the valley so they could market Spielburg as a tourist destination.</p>
      <p>Ah, they didn’t tell you that, eh? Of course not, pets. Yes, they needed two things, or two absences: me and the brigands. And you took care of that for them, didn’t you?</p>
      <p>I wonder. Did you make a lot of friends in the valley, hero? The farmer and his lovely daughter, Hilde, eh? How long do you think they’ll keep their farm, pets? Feisty Zara and her magic shop? Do you think that prime commercial real estate in downtown Spielburg will stay in her hands for long? I’d like to be the one to see them try to evict her, though, yes.</p>
      <p>Oh, pooh. Have we upset you? Tsk, tsk, hero. That’s what happens when you don’t ask questions. Point and click. Walk and run and fight.</p>
      <p>Now get out of here before I turn you into a frog. Or maybe this time something worse.</p>
    </article>

    <img class="mound" src="<?php echo $image_path; ?>mound.png" />

    <article class="tg-clean">
      <h1>I Channel the Body Electric</h1>
      <p>In fifth grade, after an all-nighter of adventure gaming, my consciousness thin and stretched from lack of sleep, I decide to apply the gaming paradigm to my daily life. In other words, if events are happening, they are likely to be connected, or to result in a humorous cut-scene. That morning my friend Bobbi goes on the Morning Announcements and tells the whole school which fifth grade girls have a crush on the new boy, Richie. I am unnamed, because I know to keep my own counsel, even on the playground, even in grade school. But one of the named girls, big for our age, both taller and stronger, is embarrassed and angry. The week before, I’d been the victim of an attempted prank call by my former friend, Nate. So, when it is time for recess, I tell the girl Nate was the one who’d given her name to Bobbi. Then I watch while she chases Nate around the playground. Level up.</p>
      <figure>
        <img alt="Elsa (II)" src="<?php echo $image_path; ?>/portraits/elsa.png" />
        <span>Elsa (II)</span>
      </figure>
      <p>I rise fast among the brigands for two reasons: One, I am better with a sword; and two, my best friend is a Minotaur named Toro. These are the two things I am, because I do not remember who I was before I was good with a sword and flanked by my seven foot, horned companion. Bruno was the last real challenger I had to best to take over as leader, the surly bastard. He’s good with a dagger, so I keep him around, despite Toro’s continued requests to behead him.</p>
      <figure>
        <img alt="Baba Yaga" src="<?php echo $image_path; ?>/portraits/baba.png" />
        <span>Baba Yaga</span>
      </figure>
      <p>I discovered long ago that cooking was like spellwork. You find the right ingredients, treat them in certain prescribed ways, combine them with heat or kinetic energy, and the final result is magic. I prefer to cook with poisonous plants for piquancy. After all, mostly I am cooking for myself and my pets. For others, only if I am compelled, and then it’s often a combination of spellwork and cuisine: cure or curse, depending on the order.</p>
      <figure>
        <img alt="Hilde" src="<?php echo $image_path; ?>/portraits/hilde.png" />
        <span>Hilde</span>
      </figure>
      <p>Honestly, at the time I didn’t think anything of it. The apples I sell at my father Heinrich’s stall in town are deep red and delicious. Who wouldn’t want to buy fifty at a time, if they had the silvers? Later, though, when I heard that you’d rescued the Baronet and his sister, Elsa von Spielburg, fulfilling the prophecy and all that, I thought, “Huh. I didn’t know our apples could do that. Maybe I should tell the townsfolk. Sell more apples.”</p>
    </article>

  </section>
  <!-- END CURSES & SPELLS -->

  <!-- TENDER GLORIES / QUIET GIRLS -->
  <section class="tg-section tg-quiet-girls">

    <header>
      <h1>Quiet Girls</h1>
    </header>

    <article class="tg-pixel">
      <h1>Trial By Fire</h1>
      <p>Fresh from being named the Hero of Spielburg, you travel with your new friends Abdulla, Shameen, and Shema to their homeland of Shapeir on Abdulla’s flying carpet. It’s good to have friends, even if the only way you know to make friends is through quests. You are tasked with defeating four Elementals that were set loose upon Shapeir by an unknown villain. Afterwards, you must travel to Shapeir’s sister city, Raseir, to get to the bottom of all the troubles in the land. Of course, there’s a prophecy or two involved. Raseir has been beset by corruption, tyranny, and black magic ever since the disappearance of the Emir Arus al-Din.</p>
      <p>Can you defeat the evil vizier, Ad Avis, before he summons the demon Iblis from beyond Suleiman’s Seal? Can you find and restore the missing Emir? Can you trust anyone? What do they want from you?</p>
    </article>

    <img class="desert" src="<?php echo $image_path; ?>desert.png" />

    <article class="tg-clean">
      <h1>I Play as a Man</h1>
      <p>On the first day of 6th grade, I play as the smart girl. I wear a plaid skirt and non-prescription glasses, so that everyone will know. If you are the smart girl, you aren’t the love interest. If you are the love interest, there will be questions. If you are the smart girl, you can answer questions instead of being the answer to questions. By 8th grade, I often play as the granola hippie girl. I wear peasant blouses and bell bottoms from Loose Lucys and don’t brush my hair. I watch other players be answers, but I know the answers to all of the questions about how to solve puzzles and tell stories. I play sage advisor to my friends. I am separate and safe. I have a role.</p>
      <figure>
        <img alt="Erana (I)" src="<?php echo $image_path; ?>/portraits/erana.png" />
        <span>Erana (I)</span>
      </figure>
      <p>There is joy in providing for others, planting gardens and weaving protection spells. Travellers, lost on the way, need sanctuary. My gardens hide magical gifts and bear fruit that invigorates the weary wanderer. My gardens have helped many brave adventurers. I have not spoken to another person in many years.</p>
      <figure>
        <img alt="Zara" src="<?php echo $image_path; ?>/portraits/zara.png" />
        <span>Zara</span>
      </figure>
      <p>My shop is an arcane oasis in a rustic shithole of a town cut off from the world by brigands and snow. The townsfolk are all illiterate breeders. My familiar is my only close companion: soft, volitant, vulpine Damiano. I wear my violet spangled gown every single day and appear in a cloud of smoke when customers enter because fuck everyone.</p>
    </article>

    <img class="maze" src="<?php echo $image_path; ?>maze.png" />

    <article class="tg-pixel">
      <img class="tg-pixel-header" />
      <figure>
        <img alt="Zayishah" src="<?php echo $image_path; ?>/portraits/zayishah.png" />
      </figure>
      <h1>Zayishah: A Retrospective</h1>
      <p>After you left? Mayzun and I married, in secret. Of course, she’s not my servant anymore. Naturally, my uncle the Emir put up something of a fuss, but I told him if it came down to it, I’d consider a political marriage as well. I think the term is polyamorous?</p>
      <p>You know, money and power go a long way toward letting you bend the rules in any culture. It’s only those without either money or power who are doomed to follow tradition. Though you can always choose tradition. Is that what you did?</p>
      <p>Well, you know you keep buying into these voluntourism, hero-for-hire adventure vacations.</p>
      <p>My dear friend, I’m not trying to belittle your contribution, such as it was, but you do realize that the Katta Underground was already planning an attack on Ad Avis and Khaveen? That Ad Avis actually couldn’t have unleashed Iblis if you hadn’t retrieved the lamp he was trapped in and handed it over to him? Of course, dear. I know. You were under his spell.</p>
    </article>

    <img class="maze" src="<?php echo $image_path; ?>shadow.png" />

    <article class="tg-clean">
      <h1>Most Likely to Explode</h1>
      <p>If you are Most Likely to Succeed, then you think it means that you are winning. Winning the game is like being a hero. In the game, there are villains. Villains hate heroes for thwarting their plans. In high school, it’s harder to tell what plans you are thwarting. In high school, you can have the lead role in the play one day (winning) and be expelled the next (game over). Honorary titles can expire very quickly, and if you haven’t saved your game, you lose all your progress. You have to decide if you will build the same character again, redoing all of your quests and building the same skills, or if it’s better to play as a different character.</p>
      <figure>
        <img alt="Elsa (III)" src="<?php echo $image_path; ?>/portraits/elsa.png" />
        <span>Elsa (III)</span>
      </figure>
      <p>After the curse was lifted, I helped my father run the brigands out of Spielburg and return the stolen treasure they—well, we—had hoarded. Discovering I’d been an enchanted princess was a mixed blessing. Father was overjoyed to have me back, but he gave Barnard control after the brigands were gone. They liked to tell everyone how I’d turned out to be the feared Brigand Leader—“It took a von Spielburg to outwit the von Spielburgs”—but they couldn’t understand that I missed being in command. When Father died, Barnard became the Baron. He never listened to me, and we fought constantly. I’d sneak out of the castle at night to go meet up with Toro and he’d spar with me and let me rant about Barnard’s idiotic decisions. Finally, we decided to leave the valley and find a new place in the world. That was when I met Minos.</p>
    </article>

  </section>
  <!-- END QUIET GIRLS -->

  <!-- TENDER GLORIES / (UN)QUIET GIRLS -->
  <section class="tg-section tg-unquiet-girls">

    <header>
      <h1>(Un)Quiet Girls</h1>
    </header>

    <article class="tg-pixel">
      <h1>Wages of War</h1>
      <p>After saving Shapeir from the elementals and liberating Raseir from the influence of the corrupt vizier Ad Avis, which you absolutely did, and there’s no disputing that, the Hero of Spielburg was adopted by the Sultan of Shapeir.</p>
      <p>Now the Prince of Shapeir, you travel with your friends Uhura and Rakeesh to their home in Tarna, which is on the brink of war. You were invited, for what it’s worth. Actually, many people think you’re quite capable and helpful, as evidenced by the epithets you keep picking up on your adventures. Uhura’s tribe, the Simbani, are at odds with the magic-wielding Leopardmen who live in the jungle outside of Tarna. Both groups mistakenly believe that the other has stolen a sacred relic from them. It seems obvious that only you can rectify this situation.</p>
      <p>Rajah, the king of the Liontaurs, sends you and Rakeesh to investigate the troubles. Rajah’s mandate is that if peace cannot be achieved, the Liontaurs will also go to war. Honestly, there’s a part of you that wonders if these events would play out more honestly without your involvement. I mean, some of this posturing and grandstanding, well. I’m not saying it’s for your benefit, exactly, but it seems unlikely that this is how everyone behaves when it’s just folks and family around.</p>
      <p>Can you and your allies negotiate a peace treaty between the feuding factions and avoid a war, as you apparently must do? Can you defeat the demon behind the discord before he unleashes an army of his fellow demons on the jungle and savannah dwelling cultures of Eastern Fricana? Can you buy into the idea that your intervention is strictly necessary in this altercation between cultures? Can you sleep at night (without being eaten by monsters or your conscience)?</p>
    </article>

    <img class="clouds-01-rev" src="<?php echo $image_path; ?>clouds_01.png" />
    <img class="clouds-01" src="<?php echo $image_path; ?>clouds_01.png" />

    <article class="tg-clean">
      <h1>NPC</h1>
      <p>Players like mystery and power, but only if they are accompanied by beauty and utility. If you want to be chosen, to maximize your interaction, some of that is out of your control, because it’s a product of how you were designed. Your story is there, written into the game in so many ways, but you shouldn’t tell it yourself, because then you aren’t functional for the players. It’s important to know your role. Some players will click on you all day long, because they think you’re interesting, but others have read the walkthrough and they know that you won’t advance their game. If you try too hard to resist your role, then the game might glitch, so it’s important not to do that. Think of it as a game of chance. If you play your role, then maybe this time someone will choose you. Maybe not. It’s not a reflection on you, because you are doing your job. Your job is to be chosen.</p>
      <figure>
        <img alt="Julanar (I)" src="<?php echo $image_path; ?>/portraits/julanar.png" />
        <span>Julanar (I)</span>
      </figure>
      <p>After the rape, I preferred being a tree. Even in the desert, where there is little water, it is better to be a tree than a woman. Especially in the desert, I preferred being a tree. No one looks at you if you are a tree in the desert, and the sun is like a knife that cuts away your pain and dries your tears.</p>
      <figure>
        <img alt="Elyssa" src="<?php echo $image_path; ?>/portraits/elyssa.png" />
        <span>Elyssa</span>
      </figure>
      <p>It’s nice to be a rusalka, because you have a job. Luring men into the water and drowning them is actually quite fulfilling. I don’t remember much of who I was when I was alive, but I can’t imagine it was better than this. After all, if it had been a good life, I wouldn’t have become a rusalka. I try not to think about it.</p>
    </article>

    <img class="clouds-02-rev" src="<?php echo $image_path; ?>clouds_02.png" />
    <img class="clouds-02" src="<?php echo $image_path; ?>clouds_02.png" />

    <article class="tg-pixel">
      <img class="tg-pixel-header" />
      <figure>
        <img alt="Kreesha" src="<?php echo $image_path; ?>/portraits/kreesha.png" />
      </figure>
      <h1>Kreesha: An Alternate Reading</h1>
      <p>Hero, you know you are a great friend of our family. My husband Rakeesh considers you his protege. You helped rescue our daughter, Reeshaka, from the demons, and helped create an antidote to the poison that was used on our son, Shakra.</p>
      <p>Can I ask you a question, in light of that friendship?</p>
      <p>I couldn’t help but notice the portraits you’ve created of your acquaintances for this memoir you’re writing.</p>
      <p>Is this what you think I look like?</p>
      <p>Of course, I’m not trying to offend you. Yes, it’s a lovely drawing. My nose seems to be exaggerated, and I just wondered if it was intentional. You’re absolutely right. I’m only an expert at the arcane arts, not the fine arts.</p>
      <p>Let me see if I can find Rakeesh for you. I’m sure you two have a lot of catching up to do.</p>
    </article>

    <img class="clouds-03-rev" src="<?php echo $image_path; ?>clouds_03.png" />
    <img class="clouds-03" src="<?php echo $image_path; ?>clouds_03.png" />

    <article class="tg-clean">
      <h1>Glitch</h1>
      <p>After the lies that roost under the snowboards, in the garage with the woodworking tools, climb the walls and blacken the fish tanks; After the ritual language is proven false, auguries cast, conjured, found, finally revealing snake skin, lock of your blond curl cut ragged, rigged with a bloody valentine on the wine-dark chocolate sea of the second hand endearments you called me; After the armada of empty beer bottles, the pristine dart board on the holy corkboard backing, the grunge rock chorus of angst ridden white men, my fury at false narrative, my fury as rebound lover awakening to reality, my fury at our piston fired bodies in mechanized motion masquerading as tableaus of courtly love: strip the costumes, scratch through the wrapping paper, look the wooden horse in its mouth, take the awl to the walls and tear it all down.</p>
      <figure>
        <img alt="Baba Yaga (II)" src="<?php echo $image_path; ?>/portraits/baba.png" />
        <span>Baba Yaga (II)</span>
      </figure>
      <p>Because you live in a chicken-legged hut, deep in the forest. Because you ride the night sky in a giant mortar and pestle. Because you have a fence lined with human skulls, some that talk. Because you live with spiders and bats, who make excellent company, in your opinion. Because you are an ogress. Because you are a witch. Because you are a woman, and you curse men.</p>
      <figure>
        <img alt="Katrina (I)" src="<?php echo $image_path; ?>/portraits/katrina.png" />
        <span>Katrina (I)</span>
      </figure>
      <p>You men are fools, easily manipulated and largely useless. If you have power, you are dangerous. Delicious, but dangerous. When I became a vampire, I realized that I didn’t have to fear you anymore. Being undead is better than being alive because I have more power, at least at night. If I can get you to release Avoozl, then the world will be shrouded in darkness, and I will finally be free. You like me in my disguise as the peasant girl. Flirt. Typical. If I am powerless, men find me attractive. Especially heroes. When you find out I have power, then it’s only a matter of time before you start rallying the villagers and storming the gates.</p>
    </article>

  </section>
  <!-- END (UN)QUIET GIRLS -->

  <!-- TENDER GLORIES / FEMME FATALES -->
  <section class="tg-section tg-femme-fatales">

    <header>
      <h1>Femme Fatales</h1>
    </header>

    <article class="tg-pixel">
      <h1>Shadows of Darkness</h1>
      <p>Immediately after defeating the Demon Wizard in the Forbidden City to the west of Tarna, you disappear before the eyes of your assembled allies, plucked from the site of your victory by magic. Absolutely no one can argue that you sought this out. Not this time.</p>
      <p>When you awaken, you are trapped inside a strange cave marked with signs of dark ritual magic. I mean, even for an extreme vacation, this would be excessive. Clearly, someone here needs your help. After escaping the cave, you meet the mysterious Katrina, who directs you to the town of Mordavia and warns you to be careful. Past enemies Baba Yaga and Ad Avis make appearances as you attempt to aid the suspicious villagers against wraiths, werewolves, vampires, ghosts, rusalki, and the Lovecraftian cult of the Dark One.</p>
      <p>Will you discover the truth about Katrina before it’s too late? Can you subvert the evil plans of the Dark Master and Ad Avis to summon the Dark One, Avoozl? If you succeed, you will release the town of Mordavia from the darkness that has afflicted it for many years, but if you fail (perhaps many many times, and I hope you saved your game) then all of your renown from past exploits will count for little, your body buried in an unmarked grave outside the beleaguered Slavic hamlet for all time. Some days, when you wake up in the Inn, and you prepare yourself to deal with the hostile gaze of the villagers, who are really quite unbelievably wary of strangers, you may wish you had. Died, I mean. Of course I’m not trying to be morbid, but don’t you find it tiring? Running around, dealing with strangers, meddling in people’s lives?</p>
    </article>

    <img class="moon" src="<?php echo $image_path; ?>moon.png" />

    <article class="tg-clean">
      <h1>Adventures in Collegiate Absence</h1>
      <p>If you haven’t played the game in a long time, you forget to pause it when you are interrupted. If you don’t pause the game, then mostly you end up dead. Monsters wander into you, kill you while you’re in the other room, on the phone with your sister who’s transitioning. It’s more important to answer the phone than it is to go to Theatre History or avoid monsters, because everyone else in the family has stopped talking to her, and she’s a wreck from the hormones. The third time you come back to the computer and find that a mantaray has killed you, and you didn’t pause the game, and you forgot to save it, you cry. It’s a week before you go back to classes.</p>
      <figure>
        <img alt="Shema" src="<?php echo $image_path; ?>/portraits/shema.png" />
        <span>Shema</span>
      </figure>
      <p>Even in Shapeir we have this saying, about loving what you do for a living, seeking a calling. My life mate Shameen is the breath of hospitality, welcoming travelers to our inn. I will not dance. Not until we return home. I cannot remember the last time I danced. Spielburg is so cold, at night we light fires and huddle beneath layered furs. In a place without warmth, in a town with three shops and no bazaar, the air is too thin to ignite movement.</p>
      <figure>
        <img alt="Erana (II)" src="<?php echo $image_path; ?>/portraits/erana.png" />
        <span>Erana (II)</span>
      </figure>
      <p>No, I never regret my decision to fight the Dark One, Avoozl, even though I’ve been trapped in limbo for many years because of the final battle. Even here, I dream. Often I am walking through one of my gardens. If someone sleeps in a garden I’ve planted, sometimes they visit me in their dreams. Or in my dreams. The lines between us blur. Of course I don’t resent them the flesh of my fruit trees or the scent of my flowers, even though I can’t taste or smell those things here. It would be too hard to exist like this if I wasn’t sure it was the right thing to do.</p>
    </article>

    <img class="woods" src="<?php echo $image_path; ?>woods.png" />

    <article class="tg-pixel">
      <img class="tg-pixel-header" />
      <figure>
        <img alt="Katrina" src="<?php echo $image_path; ?>/portraits/katrina-2.png" />
      </figure>
      <h1>Katrina: A Reckoning</h1>
      <p>No, in fact I don’t think it’s accurate to say that I asked for it. No one asks for a stake through the heart. And don’t feed me that crap about how you were going to redeem me, make me give up my magic and my plans. All you offered me was mediocrity.</p>
      <p>Yes, I know I was the one that summoned you to Mordavia.</p>
      <p>No, it wasn’t arrogance. I am more capable and intelligent than Ad Avis. I don’t know what went wrong! I should have let him kill you, there at the end. If I had, then you’d be gone, and I’d still be living in the Castle. Avoozl would be free, and I’d have an eternity of nights to draw cute little pictures of you while I ruled my own world. Yes, I see that sketch. Honestly, with the cleavage? I’m wearing a turtleneck.</p>
      <p>Empathy. It always gets you in the end. I should have been content with you seeing me as a villain. Shouldn’t have cared what you thought in the first place.</p>
      <p>No, I’m not going to make a case for you to choose to bring me back from the dead. You choose who you want to choose. That’s the one constant in my life since I met you. You choose. I wait to get chosen. Or staked. Whichever.</p>
    </article>

    <img class="abstraction" src="<?php echo $image_path; ?>abstraction.png" />

    <article class="tg-clean">
      <h1>Metamorph my First Marriage</h1>
      <p>If you marry someone IRL because they complement your current character and they help you achieve your quests, but then your character advances or you want to play as a different character type, there are penalties. Starting over as a new character type means dissolving some of your achievements. A thief can’t marry Erana. A paladin can’t marry Katrina. Sometimes, to become a paladin, you have to steal your life back. You can make up the honor points later.</p>
      <figure>
        <img alt="Katrina (II)" src="<?php echo $image_path; ?>/portraits/katrina-3.png" />
        <span>Katrina (II)</span>
      </figure>
      <p>Heroes are only honest about their quests. They lie to you and to themselves about their feelings. I have spent bodiless years in the dark remembering your body and the stake you put through my heart. The heart of a hero is narcissistic and utilitarian, but these are virtues to those who live in the light.</p>
      <figure>
        <img alt="Elsa (IV)" src="<?php echo $image_path; ?>/portraits/elsa.png" />
        <span>Elsa (IV)</span>
      </figure>
      <p>I had no intention of leading Minos on. I knew he had feelings for me, but at first he did not press them. He was rich and well spoken, and he offered to back me as a competitor for the crown of Silmaria. Foolishly, I chose to believe that it was a decision based on my merits as a leader and warrior. When I began to suspect that he had darker intentions, that he was using me as a beard while he consolidated his own power, I reached out to you, so we could stop him. It is disappointing that I am still vulnerable to flattery in this way, wanting a man to approve of my prowess and valor. I’m not asking for reassurance, Hero.</p>
    </article>

  </section>
  <!-- END FEMME FATALES -->

  <!-- TENDER GLORIES / (M)OTHERS -->
  <section class="tg-section tg-mothers">

    <header>
      <h1>Dragon Fire</h1>
    </header>

    <article class="tg-pixel">
      <h1>So You Want to be a Hero</h1>
      <p>After freeing the trapped soul of the benevolent mage Erana and vanquishing Avoozl, you are summoned by your friend, the wizard Erasmus, to sunny Silmaria. Again, not a decision you made. At this point, other people just assume that you’re happy to intervene in their problems.</p>
      <p>The king of Silmaria has been assassinated, and the kingdom is holding its traditional Rites of Rulership: a competition to find a new king. Competing against you are a handful of other worthy adventurers: the humble Silmarian guard, Kokeeno Pookameso; the warrior Magnum Opus; the Frankenstein-esque creation of the scientists, Gort; and your old friend, Elsa von Spielburg. It’s actually nice to see Elsa. Of course, that won’t be enough for you. You’ll end up making a pass at her. Oh, well.</p>
      <p>You and the other competitors must face mercenaries, Tritons from the underwater city of Atlantis, the Hydra, your own futures as foretold by the Sibyl, and even a trip to the Underworld, all while trying to avoid the poisoned blade of the assassin.</p>
      <p>Will you win the Rites of Rulership and become king of Silmaria? Will you discover the identity of the assassin and the antidote to his poison in time to save those who have fallen at his hand? When presented with a choice to resurrect either Erana or Katrina from the Underworld, who will you choose, and perhaps even marry? Will you absolutely embarrass yourself in front of Elsa? Let her win the crown? Is that patronizing? It was meant to be magnanimous. Chivalrous. OK, yes. I hear you.</p>
      <p>Most importantly, can you discover who’s behind the plot to unleash the Dragon of Doom and save Silmaria from suffering the fate of Atlantis? Without engaging in too much outright misogyny and exoticizing of the other? No? Well, I suppose it’s more important that you save the world than how you save the world.</p>
      <p>Sigh.</p>
    </article>

    <article class="tg-clean">
      <h1>Restore My Game</h1>
      <p>In Quest for Glory, the only narrative that counts is the saved game. Every death from misadventure, every other possible outcome, disappears in the clean construction of the saved game. After I separated from my first husband, I reached out to the great unrequited love of my life via Facebook. To restart. To resurrect my hero, a version of me that had existed before the misadventure and disappointment, as my protagonist. To make the right decision. IRL, there is only so much tabula rasa afforded us. When you restore your game at an earlier point, you carry the scars and the conditioned responses of every personal tragedy, large and small, that you have incurred since that time. Of course, in the decade since I’d last known Ryan, he’d collected his share of narrative wounds as well. We set out to revivify each other.</p>
      <figure>
        <img alt="Julanar (II)" src="<?php echo $image_path; ?>/portraits/julanar-2.png" />
        <span>Julanar (II)</span>
      </figure>
      <p>Salim wasn’t the first man or woman to come sit by my trunk when I was a tree in the desert. Many came that I ignored. They asked too much and offered little. It was still better to be a tree. Salim was the only one to ask the questions I had needed to answer for myself. He asked me why I was a tree, talked about the different kinds of trees he knew, read me Ovid. He told me about the years he’d spent brewing potions meant to heal and watching others misuse them. He asked me whether I thought the ambition to heal was self-serving or essentially fruitless. I remembered being a healer, before I was a tree. And I decided to answer him.</p>
      <figure>
        <img alt="Katrina (III)" src="<?php echo $image_path; ?>/portraits/katrina-2.png" />
        <span>Katrina (III)</span>
      </figure>
      <p>Sometimes it’s hard for me not to fault you for your absence. Many days, since you brought me back from the dead, I hate you for it. It is frustrating to try to be good and to content myself with daylight after having known nocturnal mysteries and power. Why, I ask myself, couldn’t you have found me before I became a vampire? I have been humbled by your love. Which is a cliché and comforting way of saying that you make me both less and grateful to be so. Life in the light is exhausting, for all its rewards.</p>
    </article>

    <article class="tg-pixel">
      <img class="tg-pixel-header" />
      <figure>
        <img alt="Erana" src="<?php echo $image_path; ?>/portraits/erana.png" />
        <img alt="Zara" src="<?php echo $image_path; ?>/portraits/zara.png" />
      </figure>
      <h1>Erana &amp; Zara: A Revisioning</h1>
      <p>Hero, I will always be grateful that you freed me from Avoozl and brought me back from the dead. It is my hope that we will always be friends. I wanted to tell you, now that we’ve defeated the Dragon of Doom, and Elsa has been crowned the Ruler of Silmaria, I am planning to return to Spielburg.</p>
      <p>The garden I planted in those forests was one of the first I’d ever made. And, of course, there is Zara. I hope.</p>
      <p>Yes, I heard about your exploits there. Without Baba Yaga to check him, I’m concerned that the Baron’s ambitions for the valley will only grow. The Dryad will need assistance.</p>
      <p>Of course I’m not criticizing you. I believe you did what you thought was best. As you always do. As we can only ever do. The important thing is not what was done yesterday, but what will be attempted tomorrow.</p>
      <p>It’s been hundreds of years since I last saw Zara. I miss her. I miss her sharp wit, her misanthropy, her dramatic gestures. I miss her conversation and I miss her body. I spent a very long time isolated from the small intimate moments between friends and lovers. I want to make art and magic and love. Garden. Be a caretaker and a creator. Seek tender glories.</p>
    </article>

    <article class="tg-clean">
      <h1>Premature Plug and Play</h1>
      <p>It makes a certain kind of sense that my child would be incubated both in my body and in a machine. That his limbs would be augmented by myriad coiling cords, lines of power pumping oxygen and milk, like health and stamina potions. I watch his health bar, waiting for it to reach full strength. The symphony of beeps and alarms in the NICU is like the synth soundtrack of my life.</p>
      <figure>
        <img alt="Uhura" src="<?php echo $image_path; ?>/portraits/uhura.png" />
        <span>Uhura</span>
      </figure>
      <p>In my village, you cannot be a warrior and a wife. Also, in my village, you cannot be a mother if you are not a wife. I was a warrior, but I wanted to be a mother. I left my village and travelled to Shapeir so that I could become a mother without becoming a wife. In Shapeir, they recognized that as a warrior, I was the best. I became Guild Master for the Adventurer’s Guild, training others with spears to fight jackalmen and giant scorpions in the desert. My son, Simba, will be a warrior like me. Soon it will be time to take him home.</p>
    </article>

    <article class="tg-clean">
      <h1>Cutting the Cord</h1>
      <p>One of the biggest components of the QFG games is training your character, developing skills. In the first game, you spend a lot of time climbing a tree outside the healer’s hut over and over, to get your climbing skills high enough to attempt the central quests. For two years after my son came home from the hospital, I didn’t play computer games very much. He was still getting his food through a gastrostomy tube that had been surgically inserted into his stomach, and receiving supplemental oxygen through a nasal cannula. While his father Ryan, my second husband, worked, I was the primary caregiver. I loaded the bags with formula, programmed the machine to give it at the right speed. He was working on outgrowing his lung problems. My blond son was in training for life. We did the same things, over and over. First he got strong enough to start eating by mouth. Eight months after that he started breathing on his own.</p>
      <figure>
        <img alt="Bella" src="<?php echo $image_path; ?>/portraits/bella.png" />
        <img alt="Tanya" src="<?php echo $image_path; ?>/portraits/tanya.png" />
        <span>Bella &amp; Tanya</span>
      </figure>
      <p>Ya, my daughter Tanya was a vampire. My husband Yuri doesn’t like for me to talk about it. I like to think that it makes her special and protects her. It was a terrible time, when she was missing, a dead thing in the castle. Now that the hero used Erana’s Staff to resurrect her, she’s a lovely child, and she plays in the sunshine. Not many women know this feeling, to have a child come back from the dead.</p>
    </article>

    <article class="tg-pixel">
      <img class="tg-pixel-header" />
      <figure>
        <img alt="Elsa" src="<?php echo $image_path; ?>/portraits/elsa.png" />
      </figure>
      <h1>Elsa: A Reorientation</h1>
      <p>It has been good to work with you again. I was glad to see you, when you first showed up here in Silmaria. After all, I’m not afraid of competition. Since I left Spielburg, I’ve sought out many challenges, to prove to myself and others that I am capable and worthy. I suppose we have that in common.</p>
      <p>I must say, I will be grateful to be rooted in one place again. My life has taken many turns, and I have suffered many disappointments. This new life will challenge me without asking that I sacrifice my character. Finally I will be able to surround myself with trustworthy advisors and friends. As ruler of Silmaria, I can institute all of the changes I envisioned to the guard force based on my experiences in Spielburg. I can negotiate fair treaties and trade agreements with the neighboring islands, as well, now that the mercenaries have been driven away.</p>
      <p>You know my plans. What are yours? Will you continue to seek adventure and glory? You must visit, no matter the course you choose.</p>
      <p>Who else knows the mixed blessing of Baba Yaga’s spellwork, the rift within when one remembers battles won which were perhaps better lost? Though many seek glory, you and I know that all glorious achievements are built on our failures and weaknesses. You and I may be heroes, but we have also been brigands and mercenaries in the eyes of others.</p>
      <p>We know the smaller glories of rising each day to begin anew, carrying the burden of the past with us every step.</p>
      <p>Who else will know what I mean when I speak of these things?</p>
    </article>

  </section>
  <!-- END (M)Others -->

  <footer>

  </footer>

</section>

<?php get_template_part( 'chapbooks/chapbook', 'footer' ); ?>
