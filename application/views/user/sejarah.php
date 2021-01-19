<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Sejarah</h1>
    </div>

    <?= $this->session->flashdata('message') ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="m-0 font-weight-bold text-primary">Sejarah</h5>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-warning btn-sm float-right" href="<?php echo base_url('user/sejarahedit/') . $sejarah['id'] ?>">Edit Data Sejarah</a>
                </div>
            </div>
            <h6 class="mt-2 mb-0"><span class="fa fa-user mr-2"></span><?= $sejarah['judul']; ?></h6>

        </div>
        <div class="card-body">
            <div class="row justify-content-center mb-3">
                <div class="col" style="margin-left: 200px;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TNKzQMnT978" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-justify" style="background-color: white;">
                        <?= $sejarah['deskripsi']; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>