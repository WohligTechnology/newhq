<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12 drawchintantable">
                <?php $this->chintantable->createsearch("Team");?>
                <div class="col s4">

                </div>
                <table class="highlight responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="name">Name</th>
                            <th data-field="teamid">Team id</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <?php $this->chintantable->createpagination();?>

    </div>
    <div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createteam"); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a>
    </div>
    <div class="row">
    <div class="col s12">
            <a class="waves-effect waves-light btn blue darken-4 margall" href="<?php echo site_url('site/uploadteamcsv'); ?>"><i class="icon-trash"></i>Upload CSV</a> &nbsp;
        </div>
    </div>



</div>
<script>
    function drawtable(resultrow) {
        
        return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.teamid + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad tooltipped' href='<?php echo site_url('site/editteam?id=');?>" + resultrow.id + "' data-position='top' data-delay='50' data-tooltip='Edit'><i class='material-icons'>mode_edit</i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad tooltipped' onclick=\"return confirm('Are you sure you want to delete?');\" href='<?php echo site_url('site/deleteteam?id='); ?>" + resultrow.id + "' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";


    }
    generatejquery('<?php echo $base_url;?>');
</script>
