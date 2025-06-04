<?php include('header.php'); ?>

<div class="main-content">
  <div class="featured-article">
    <h2>Featured Article</h2>
    <h4>The Philosophy of Self-Governance</h4>
    <p>Explore the roots of voluntary association, mutual aid, and resistance to coercive systems.</p>
    <a href="#" class="btn btn-outline-success">Read More</a>
  </div>

  <div class="article-list">
    <h3>Recent Posts</h3>
    <ul>
      <?php
      $articles = [
        "Reclaiming Knowledge in a Controlled World",
        "Hack the System: Coding for the Free Mind",
        "Desert Legends and the Ghosts of Cochise",
        "Star Maps and State Maps: Who Draws the Lines?",
        "The Sound of Rebellion: Mixing Beats for Resistance"
      ];
      foreach ($articles as $title) {
        echo "<li><a href=\"#\">$title</a></li>";
      }
      ?>
    </ul>
  </div>
</div>

<?php include('footer.php'); ?>
