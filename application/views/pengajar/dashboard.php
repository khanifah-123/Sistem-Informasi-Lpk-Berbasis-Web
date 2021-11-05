<div class="container-fluid">
    <div class="alert alert-grey" role="alert">
        <i class="fas fa-tachometer-alt"></i>Dashboard
    </div>
    <div class="alert alert-grey" role="alert">
        <h4 class="alert-heading">Selamat Datang</h4>
        <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi LPK Uri Sarang, Anda
            Login sebagai <strong><?php echo $level; ?></strong></p>
        <hr>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"></i> Control Panel
        </button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>