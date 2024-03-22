<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if (isset($_GET['continent'])){
  $continent = $_GET['continent'];} else {
    $continent = 'Asia';
  }
$desPays = getCountriesByContinent($continent);

?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays d'<?php echo $continent;?></h1>
    <div>
     <table class="table">
         <tr>
           <th>Drapeau</th>
           <th>Id</th>
           <th>Nom</th>
           <th>Population</th>
           <th>Region</th>
           <th>Capital</th>
           <th>President</th>
           <th>Government</th>
          </tr>
          <?php foreach ($desPays as $paysContinent): ?>         
            <tr>
              <td> <img src= "./images/drapeau/<?php if (!empty ($paysContinent->Code2)){echo strtolower($paysContinent->Code2);} else{echo "pas de drapeau";}?>.png">
              <td> <?php echo $paysContinent->id ?></td>
              <td> <?php echo $paysContinent->Name ?></td>
              <td> <?php echo $paysContinent->Population ?></td>
              <td> <?php echo $paysContinent->Region ?></td>
              <td> <?php if(!empty($paysContinent->Capital)){echo getCapitale($paysContinent->Capital);} else{echo "pas de capitale";}?></td>
              <td> <?php if (!empty($paysContinent->HeadOfState)){echo $paysContinent->HeadOfState;} else{echo "pas de president";}?></td>
              <td> <?php echo $paysContinent->GovernmentForm ?></td>
            </tr>
            <?php endforeach; ?>


     </table>
    </div>
    <style>
    main {
      background-image: url(https://i.pinimg.com/originals/0f/61/a9/0f61a927fd3892d1f0db35ad00285be2.gif);
      background-attachment:fixed;
      background-repeat: no-repeat;
      background-position: center;
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background-size:cover;
    }

    .table{
      width:100%;
      margin: bottom 1rem;
      color:white;
    }

    table {
      max-width: 800px;
      color: white;
      margin: 20px auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    h1, h2 {
      color: white;
    }
  </style>
        <p>nombre de pays total : <?php echo getNbTotalpays(); ?></p>

  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>

