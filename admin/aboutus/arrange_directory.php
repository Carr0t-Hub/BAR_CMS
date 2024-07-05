<?php include("../common/header.php"); ?>
<?php include("../common/sidebar.php"); ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.4/gridstack-extra.min.css" integrity="sha512-S5Dc296GNm2+jDgIiTe56a6Daz6Zbo71O92qkvEVrwsOLOigoc3IFcqblu+deM9/2uRs9O4k8LvuQbN8nWHVuQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
    .grid-stack {
        background: #FAFAD2;
    }

    .grid-stack-item-content {
        background-color: #18BC9C;
    }
</style>

<div class="grid-stack"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.4/gridstack.min.js" integrity="sha512-WdDxKC+6+SRQzYUVYtrdh+PT4SQ+E83xpb6xZUwrayWdWaq38iqFTYytMmIt6rJPra9vXwlNOAWIjmO5bR65NA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    var items = [{
            content: 'my first widget'
        }, // will default to location (0,0) and 1x1
        {
            w: 2,
            content: 'another longer widget!'
        } // will be placed next at (1,0) and 2x1
    ];
    var grid = GridStack.init();
    grid.load(items);
</script>

<?php include("../common/footer.php"); ?>