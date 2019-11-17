<div class="container">
    <a href="index.php?action=add_form" class="btn btn-primary mb-5">Add New</a>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Mark</th>
                    <th>Sex</th>
                </tr>
                <?php
                    if (isset($data['student'])){
                        foreach ($data['student'] as $result){
                ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['class']; ?></td>
                    <td><?php echo $result['mark']; ?></td>
                    <td><?php echo $result['sex']; ?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</div>