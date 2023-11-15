<?php
include('../app/Views/header.php');
?>

<div class="row">
    <h1>Liste des Pays</h1>
</div>
<div class="row">
    <table class ="table table-bordered table-striped">
        <thead>

        </thead>
        <tbody>
            <?php 
            foreach ($pays as $p)
            {
                echo '<tr>';
                echo '<td>',$p->name, '</td>';
                echo '<td>';
                $url = '.?controller=Pays&action=edit';
                $label = '<i class ="fas fa-pen"></i>;';
                $type = 'info';

                    include ('../app/Views/components/button.php');

                $url = '.?controller=Pays&action=delet';
                $label = '<i class ="fa fa-trash"></i>;';
                $type='danger';
                include('../app/Views/components/button.php');

                echo '</td>';

                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php

include('../app/Views/footer.php');
