<?php include('includes/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>African Pathfinders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
  /* Hide scrollbar */
  .scroll-container::-webkit-scrollbar {
    display: none;
  }
  .scroll-container {
    -ms-overflow-style: none;
    scrollbar-width: none;
    scroll-behavior: smooth;
    overflow-x: auto;
    display: flex;
    gap: 1.5rem;
    padding: 0 2rem;
    position: relative;
  }

  /* Card styling */
  .scroll-container .card {
    flex: 0 0 auto;
    min-width: 300px;
    max-width: 300px;
  }

  /* Arrow buttons */
  .scroll-btn {
    z-index: 10;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 1.5rem;
    line-height: 1;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Fade effect on edges */
  .fade-left,
  .fade-right {
    position: absolute;
    top: 0;
    width: 50px;
    height: 100%;
    z-index: 5;
    pointer-events: none;
  }

  .fade-left {
    left: 0;
    background: linear-gradient(to right, #f8f9fa, transparent);
  }

  .fade-right {
    right: 0;
    background: linear-gradient(to left, #f8f9fa, transparent);
  }
  #poetryScroll::-webkit-scrollbar {
  display: none;
}
  button.read-more-btn.btn.btn-link {
    color: #0d6efd !important;
    font-weight: 600 !important;
    font-size: 0.9rem !important;
    text-decoration: underline !important;
    cursor: pointer !important;
    border: none !important;
    background: transparent !important;
    padding: 0 !important;
    transition: color 0.3s ease !important;
  }

  button.read-more-btn.btn.btn-link:hover {
    color: #0a58ca !important;
    text-decoration: none !important;
  }

</style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">African Pathfinders</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navMenu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">Authors</a></li>
        <li class="nav-item"><a href="#books" class="nav-link">Books</a></li>
        <li class="nav-item"><a href="#store" class="nav-link">Store</a></li>
        <li class="nav-item"><a class="nav-link" href="#poetry">Poetry</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="hero" class="vh-100 d-flex align-items-center text-white text-center position-relative">
  <div class="hero-bg"></div>
  <div class="container position-relative z-1">
    <h1 class="display-3 fw-bold">African Pathfinders</h1>
    <p class="lead">Discover books that inspire, educate, and transform.</p>
    <a href="#books" class="btn btn-light mt-3">Browse Books</a>
  </div>
</section>


<section id="about" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-5">Authors</h1>

    <div class="row align-items-center">
      <!-- CEO Image -->
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="assets/images/Bright Molande.jpg" 
     alt="Dr Bright Molande" 
     class="shadow" 
     style="width: 250px; height: 250px; border-radius: 50%; object-fit: cover;">

      </div>

      <!-- CEO Info -->
      <div class="col-md-8">
        <h3 class="mb-3">Bright Molande</h3>
        <p>
          Bright Molande lectures in Literature at the University of Malawi, after earning his Masters and Doctorate at the University of Essex. 
          He is a published poet, with some poetry discussed in academic circles in Africa and the US. Now he returns 
          with a conscience-probing pen rewriting memories and voices. Pain finds pleasure in the sublime of tragedy
        </p>
        <p>
This poetry demonstrates well-versed creativity, high imagination and deep agony but delivered in pleasures of intertextuality, poetics of repetition, 
rewriting mythology and at times reinventing poetic form. This is a new voice of African poetry, sublime imagination soothing beyond the agony of tragic lamentations. 
It's poetry that comes once in a generation.        </p>
      </div>
    </div>
  </div>
</section>

<!-- Books Section -->
<section id="books" class="py-5">
  <div class="container">
    <h1 class="text-center mb-4">Our Books</h1>
    <div class="row g-4">
      <?php foreach (getBooks() as $book): ?>
      <div class="col-md-4 col-12">
        <div class="card h-100">
          <img src="assets/images/<?= $book['cover_image'] ?>" 
    class="card-img-top" 
    alt="<?= $book['title'] ?>" 
    style="height: 600px; object-fit: cover; width: 100%;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p class="card-text"><?= $book['author'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Store Section -->
<section id="store" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-4">Store</h1>
    <div class="row g-4">
      <?php foreach (getBooks() as $book): ?>
      <div class="col-md-4 col-12">
        <div class="card h-100">
          <img src="assets/images/<?= $book['cover_image'] ?>" 
     class="card-img-top" 
     alt="<?= $book['title'] ?>"
      style="height: 600px; object-fit: cover; width: 100%;">
     
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p>Price: MWK <?= number_format($book['price'], 2) ?></p>
            <button class="btn btn-success w-100">Add to Cart</button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<section id="poetry" class="py-5 bg-light position-relative">
  <div class="container position-relative">
    <h1 class="text-center mb-5">Poetry</h1>
        <h2 class="text-center mb-5">Selected Poems</h2>

        <div class="fade-left"></div>
    <div class="fade-right"></div>
<button class="scroll-btn left position-absolute top-50 start-0 translate-middle-y btn btn-light shadow" 
        onclick="scrollPoetry(-1)">
  ‹
</button>
<button class="scroll-btn right position-absolute top-50 end-0 translate-middle-y btn btn-light shadow" 
        onclick="scrollPoetry(1)">
  ›
</button>

<div id="poetryScroll" class="scroll-container mt-4">
  <div id="poetryInnerScroll" class="d-flex flex-nowrap overflow-auto gap-4 px-2">
<!-- Poetry Card 1 -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Poetics of Repetition</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      Repetition is the grammar of poetics<br>
      Rewriting is the poetics of repetition;<br><br>
      Creation is the art of eternal repetition<br>
      Repeating repetition in endless variation;<br><br>
      No wonder God is the Poet of repetition<br>
      Repeating everything without repeating anything.
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Allegory of the Beginning -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Allegory of the Beginning</h5>
    <h8 class="card-title fst-italic">(After Ted Hughes)</h8>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      When God flooded the Earth and flattened mountains,<br>
      Crow descended from heaven all white in holy robes.<br>
      Priestly, Crow came to inspect creation of destruction.<br><br>

      A rainbow landed upon the peeping mountain tops <br>
      From horizon to horizon, Crow cried “Fire Next Time!” <br>
      “I will never destroy the Earth with water again”, God said.<br><br>

      Crow fixed a napkin upon his collar, and sat in the rainbow <br>
      He carried sword and scythe each hand for knife and fork <br>
      Crow sat down to a feast of corpses and sang “Hallelujah!” <br>
      Feasting on decay with sword and scythe, Crow said in his heart:<br>
      I will set my banquet above the table of God;<br>
      &nbsp;&nbsp;&nbsp;&nbsp;I will ascend to the heavens;<br>
      I will raise my feasting throne<br>
      &nbsp;&nbsp;&nbsp;&nbsp;above the stars of God;<br>
      I will ascend above the heights of the clouds;<br>
      &nbsp;&nbsp;&nbsp;&nbsp;I will make myself like the Most High!<br><br>

      Crow laid a crafty subterfuge to waylay God, while he attacked: <br>
      Crow whispered to man to playfully twirl wood upon wood;<br>
      Then Crow peeped into the dark corners of the Earth <br>
      And hoarsely, Crow croaked incantations of the beginning: <br>
      “Let there be light,” echoing into the void, and there was light!<br>
      A cosmogonic spark, Big Bang! Man had invented fire.<br>
      Forests burned, Earth burned, and heavens burned with rage!<br>
      God fled on a frail spider ladder trailed by old Chameleon!<br>
      Ascending, God turned midway, bent and said to man:<br>
      You shall labour, suffer and die eternally<br>
      to be with me in heaven;<br>
      All creation shall eternally moan and groan <br>
      like a woman in labour.<br>
      Everything that lives shall come to decay<br>
      and you’ll know that I am eternal God!<br><br>

      While God bent and attended to the last of mankind on Earth; <br>
      Crow flew a flag of death and decay above the highest heights!<br>
      But victory curtailed, Crow was cast to the depths of the abyss.<br><br>

      Flaming like a burning meteor across the horizon, Crow fell!<br>
      He landed into the burning Earth and disappeared <br>
      Crow vanished into raging flames where a hoarse voice croaked:<br>
      Ahaa!<br>
      I will happier be a king in hell<br>
      Than serve as a slave in heaven!<br><br>

      A millennium of seasons passed while inchoate Earth formed.  <br>
      When Crow rose out of the ashes, sword and scythe in hand,<br>
      Crow was charred black, voice black, soul black, all black except— <br>
      A white blotch hung upon the neck where the napkin had been.<br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Chameleon's Turn -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Chameleon’s Turn</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text long-poem collapsed">
      In the beginning was the Chameleon, and <br>
      The Chameleon was with the Supreme God <br>
      He was with the Creator in the beginning. <br>
      Together, they made all humans and animals.<br><br>

      A lonely mortal soul in all the universe,<br>
      Chameleon climbed the tallest tree <br>
      Standing on the peak of the tallest mountain,<br>
      Singing himself a sad lullaby in agony of solitude, <br>
      Chameleon slept off his grief-stricken soul.<br><br>

      In the middle of the night, came a howling storm. <br>
      The storm shook and shook the mountain<br>
      But the mountain did not shake. <br>
      The storm grabbed and shook and shook the tree; <br>
      The tree danced and danced and Chameleon fell;<br>
      Chameleon hurled and burst open upon the rock.<br><br>

      Crashed, smashed, shredded and dismembered, <br>
      Out of that blood splattered disemboweled belly<br>
      The first man and all animals walked out to live.<br>
      Life came out of death, out of chaos came order. <br>
      But paradise on earth did not last.<br><br>

      The Creator summoned Lizard and Chameleon, <br>
      Offering mankind to choose between life and death.<br><br>

      And the Creator spoke in trembling thunder:<br><br>

      I summon heaven and earth to witness this day; <br>
      I have set before you life and death—<br>
      Choose!<br><br>

      Chameleon chose to decree life unto mankind;<br>
      Lizard fast scuttled to decree death to mankind!<br>
      But fragile Chameleon was too frail, too old to walk.<br>
      Chameleon delayed life, an omission beyond redemption!<br>
      Now mankind wails in endless suffering and death; <br>
      Creation endlessly groans like a woman in childbirth. <br><br>

      A noble intention breeding death and destruction,<br>
      A noble sin of omission breeding agony and suffering, <br>
      Chameleon carried a message of life that decreed death. <br>
      Life became the restless forerunner of death;<br>
      Death became the endless forerunner of life. <br>
      Guilty as found— itinerant Chameleon became <br>
      A restless wanderer on the face of the earth, crying—<br><br>

      My punishment is greater than I can bear!<br>
      I am a man more sinned against than sinning!<br><br>

      Tragedy has no other name!<br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Humility -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Humility</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      There is greatness that lies in humility:<br>
      Even a king will bow before a barber.<br><br>

      No matter how high the eagle may fly, <br>
      there is no bird that rots in the sky.<br>
      Everything that flies comes down to decay.<br><br>

      It is the petty minded that crave fame;<br>
      Fame craves men of substance.<br><br>

      A pig waxed borrowed wings to fly to a feast,<br>
      It was sent back melting by the smiling sun. <br><br>

      Ambition with impatient wheels <br>
      Is a heavy headed beast that soon<br>
      Crashes like a blind train upon the hills.<br><br>

      Beware hubris!<br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- She Thought She Was All Divine -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">She Thought She Was All Divine</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      Wedded to heavens beyond lofty stars,<br>
      She was a trailing blaze of the seasons:<br>
      Dressed in blinding colours, <br>
      Studded with emeralds and rubies,<br>
      Outshining stars beyond the night, <br>
      Blue sapphires and twinkling diamonds,<br>
      Standing in shoes of polished gold.<br><br>

      She never touched this earth of decay,<br>
      Granite mountaintops were her footfalls,<br>
      When she came tasked to inspect mortality. <br><br>

      When she came out in the night sky<br>
      Stars went hiding their faces.<br>
      When she descended to bathe in oceans<br>
      Mermaids went hiding their beauty. <br>
      When she ascended in divine retreat<br>
      The sun hid behind the moon in eclipse.<br>
      And she thought, she was all divine!<br><br>

      And then, suddenly!<br>
      Blood rained from stained heavens.<br>
      And she fell! <br>
      Bleeding, naked, torn! <br>
      Bound in chains of pain upon the rocks—<br>
      Bleeding like Prometheus bound on rocks!<br><br>

      She cannot rise and walk among us;<br>
      She cannot live like us, we the mortals;<br>
      She cannot live;<br>
      She cannot die;<br>
      She cannot fly.<br>
      There are dangers worse than death. <br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Birth of a Cyclone -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Birth of a Cyclone</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      The sun came out to survey the sea below,<br>
      The wind came along in a gentle breeze,<br>
      Shimmering waters from the end to the end of the earth.<br>
      Sporadic clouds stood and watched at a distance.<br><br>

      But something, something was strange that day. <br>
      In the middle of nowhere in the endless vast waters; <br>
      Someone, someone dug a black hole in the ocean.<br><br>

      A bottomless hole beyond reach far beneath, <br>
      The sea gathered and vanished into the hole.<br>
      The wind went mad and whirled with gathering ferocity, <br>
      Clouds went mad, darkening with an insidious intent.  <br>
      The sea went mad and whirled and danced in cycles <br>
      Rising waves roared and sank into the dark vortex.<br>
      Cycling cycles gyrated into Fibonacci curves, <br>
      Here was God’s signature, a beautiful terror! <br><br>

      A horrifying beauty waiting to suck you <br>
      A luring danger in sparkling beauty<br>
      Death in beauty, beauty in death<br>
      A storm of death was unleashed <br>
      The cyclone had begun. <br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Stories of the Dead -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Stories of the Dead</h5>
    <h8 class="card-subtitle mb-2 text-muted">(On trying to speak for the dead after the Cyclone)</h8>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      The dead never tell their story<br>
      Who are we to tell how they died?<br><br>

      The dead never tell where they are gone<br>
      Who are we to tell where the dead go?<br><br>

      The dead never tell what they suffered<br>
      Who are we to tell what they suffered?<br><br>

      The dead never speak our language<br>
      Who are we to speak their language?<br><br>

      The dead never tell their secrets<br>
      Who are we to imagine their secrets?<br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>


<!-- Poetry Card 2 -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">African Sestina</h5>
    <h8 class="card-title fst-italic">(After Adam LeFevre)</h8>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      This poem is a hungry monster.<br>
      Repetition wants something else every time. Six<br>
      madmen and you, locked in a dance—that’s a sestina!<br><br>

      This poem is a rebellion of repetition.<br>
      Seven oceans, seven continents in seven days. Six<br>
      poets rioted to know why six matters— that’s a sestina!<br><br>

      This rebellion of repetition began here, Africa.<br>
      Man was created in Africa and headed East before West. Six<br>
      next continents to repeat man’s creation— that’s a sestina!<br><br>

      It’s divine madness in search of lost perfection.<br>
      Six times lost harmony, order and balance. Six<br>
      days of creation without completion— that’s a sestina!<br><br>

      Sestina is a monstrous beauty.<br>
      Repeating repetition without being repetitive. Six<br>
      times of creating order out of chaos— that’s a sestina!<br><br>

      On the seventh time, the Poet rested.<br>
      Yet, all creation groans in pain like a woman in labour. Six<br>
      times groaning in labour of repetition— that’s a sestina!<br><br>

      On the seventh day, nothing was repeated. Death!<br>
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Poetry Card 3 -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">God is a Poet</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      I will marry a woman <br>
      And call her Sestina <br>
      Because God is a Poet.<br><br>

      We will bear a daughter<br>
      And call her Sestina <br>
      Because God is a Poet.<br><br>

      We will bear six children <br>
      And multiply with her six <br>
      Because God is a Poet.<br><br>

      I add 1 + 2 + 3 to make 6 <br>
      And multiply 1 x 2 x 3 to make 6<br>
      Because six is Perfection.<br><br>

      I begin a Fibonacci counting 1, 2, 3<br>
      As I curve God’s signature<br>
      Because God is a Poet.<br><br>

      I repeat six times of echoes<br>
      And rest on the seventh echo <br>
      Because God is a Poet.<br><br>

      God is a Sestina Poet.
    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

<!-- Poetry Card 4 -->
<div class="card shadow-sm border-0 flex-shrink-0" style="min-width: 300px; max-width: 90vw;">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">Waiting for My Turn</h5>
    <h8 class="card-title">Bright Molande</h8>
    <p class="card-text poem-text collapsed">
      Time has done its time; time has done its time; <br>
      My knees creak with sinister intimations of mortality<br>
      As I stand on naked feet—<br><br>

      Gazing at my feet, I stand hallowed in veneration,<br>
      Dwarfed under this ancient mountain of mountains;<br>
      Searching for a soul lost in mysteries of the mountain.<br>
      We are men in search of our souls, our lost souls.<br>
      Behind me, a meandering sketch of faces, faces, faces… <br>
      A queue disappearing in the horizon beyond sunset <br>
      Waiting for a turn! Waiting for a turn! Waiting—<br><br>

      “This way please!” a voice speaks. And beyond,<br><br>

      Two granite faces of the mountain stand in symmetry<br>
      Like symmetrical labia guarding the holy grotto below.<br>
      This is the sacred doorway into the womb of the earth. <br>
      An old woman poised on the rock in middle of the pool:<br>
      Mermaid of ancient dreams, vestiges of ancient visions;<br>
      A presence of absence, presence of the world beyond us.<br><br>

      Upon our approach, she quietly dives into disappearance. <br>
      Only lingering ripples of the pool speak of spirits here.<br>
      They say she always returns to the womb of the mountain<br>
      To renew her youth and rejoin others high at the peak.<br>
      She will return down to earth to sit in the pool again;<br>
      She always returns when we are gone and lost.  <br><br>

      Then comes the sacred ritual of self-sanctification:<br>
Water in a forgotten potsherd of ancient rainmakers;<br>
I wash my face and feet in the procession of death,<br>
I anoint my feet and face in the procession of rebirth,<br>
And proceed up the holy grove for the next vision. <br><br>

Aloft, sky borne,<br>
The poet descends from secret vestries of the mountain;<br>
Returning from the peak where no mortals dare trespass. <br>
He ascended like a White tourist in ridiculous trappings, <br>
He descended in a loincloth carrying rock tablets scripted. <br><br> 

This is the poet who spoke of secret mysteries beyond:<br>
All rivers meet at the peak, all enemies greet at the peak,<br>
Life and death shake hands where death is rebirth.<br>
He carried his soul on his shoulders and left for Sapitwa.<br><br>


    </p>
<button class="read-more-btn">Read More</button>
  </div>
</div>

      </div>
    </div>
  </div>
</section>


<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-4">Contact Us</h1>
    <form method="post" action="contact_process.php" class="mx-auto" style="max-width: 600px;">
      <div class="mb-3">
        <input name="name" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="mb-3">
        <input name="email" type="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
      </div>
      <button class="btn btn-primary w-100">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container text-center text-md-start">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5>African Pathfinders</h5>
        <p>Your trusted source for books that inspire, educate, and entertain.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h6>Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#about" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="#books" class="text-white text-decoration-none">Books</a></li>
          <li><a href="#blog" class="text-white text-decoration-none">Blog</a></li>
          <li><a href="#contact" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h6>Contact</h6>
        <p>Email: info@pathfinders.com</p>
        <p>Phone: +265 888 123 456</p>
        <div>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-light">
    <p class="text-center small mb-0">&copy; <?= date('Y') ?> Pathfinders Publishing. All rights reserved.</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Add .scrolled class to navbar on scroll
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>
<script>
function scrollPoetry(direction) {
  const scrollContainer = document.getElementById('poetryInnerScroll');
  const scrollAmount = 300; // pixels to scroll, adjust as needed

  if (!scrollContainer) return;

  scrollContainer.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth'
  });
}

</script>
<script>
document.querySelectorAll('.read-more-btn').forEach(button => {
  button.addEventListener('click', () => {
    const currentPoem = button.previousElementSibling; // the <p> with poem-text

    // Collapse all other poems except current
    document.querySelectorAll('.poem-text').forEach(poem => {
      if (poem !== currentPoem) {
        poem.classList.add('collapsed');
        // Also reset other buttons text to "Read More"
        const btn = poem.nextElementSibling;
        if (btn && btn.classList.contains('read-more-btn')) {
          btn.textContent = 'Read More';
        }
      }
    });

    // Toggle current poem
    const isCollapsed = currentPoem.classList.toggle('collapsed');

    // Update button text accordingly
    button.textContent = isCollapsed ? 'Read More' : 'Read Less';
  });
});
document.querySelectorAll('.read-more-btn').forEach(button => {
  button.addEventListener('click', () => {
    const poem = button.previousElementSibling; // the <p> before button
    poem.classList.toggle('expanded');
    button.textContent = poem.classList.contains('expanded') ? 'Read Less' : 'Read More';
  });
});



</script> 
</body>
</html>
