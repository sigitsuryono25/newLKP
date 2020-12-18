<div class="container-fluid">
    <div class="table-responsive">
        <table id="sidebar-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Ringkasan Konten</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($sidebar as $value) {

                    $string = strip_tags($value->content);
                    if (strlen($string) > 50) {

                        // truncate string
                        $stringCut = substr($string, 0, 50);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                        $string .= '...';
                    }
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $string ?></td>
                        <td><?php echo $value->nama ?></td>
                        <td>
                            <a class="btn btn-success mr-4 text-white" href="<?php echo site_url('edit/edit_side_bar/' . $value->id . "/!#sidebar") ?>">Edit</a>
                            <!--<a onclick="return confirm('Hapus testimoni ini ?')" class="btn btn-danger text-white" href="<?php echo site_url('delete/delete_testimoni/') . $value->id . "/!#testimoni" ?>" >Hapus Kelas</a></td>-->
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $("#sidebar-table").dataTable();
</script>