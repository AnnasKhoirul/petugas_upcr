    <div class="modal fade" id="exampleModalCenter<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Detail Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <?php foreach ($jabatan->tampil_all() as $j): ?>
                            <?php if ($j['petugas_id'] == $data['id']): ?>
                                <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Jabatan</th>
                                                <th>Nama</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: #8A0808">
                                                <td>1</td>
                                                <td>Pembina</td>
                                                <td><?php echo $j['pembina']; ?></td>
                                            </tr>
                                            <tr style="background-color: #B40404">
                                                <td>2</td>
                                                <td>Pemimpin</td>
                                                <td><?php echo $j['pemimpin']; ?></td>
                                            </tr>
                                            <tr style="background-color: #DF7401">
                                                <td>3</td>
                                                <td>Kompi 1</td>
                                                <td><?php echo $j['kompi_1']; ?></td>
                                            </tr>
                                            <tr style="background-color: #FF8000">
                                                <td>4</td>
                                                <td>Kompi 2</td>
                                                <td><?php echo $j['kompi_2']; ?></td>
                                            </tr>
                                            <tr style="background-color: #FE9A2E">
                                                <td>5</td>
                                                <td>Kompi 3</td>
                                                <td><?php echo $j['kompi_3']; ?></td>
                                            </tr>
                                            <tr style="background-color: #688A08">
                                                <td>6</td>
                                                <td>Bendera 1</td>
                                                <td><?php echo $j['bendera1']; ?></td>
                                            </tr>
                                            <tr style="background-color: #4B8A08">
                                                <td>7</td>
                                                <td>Bendera 2</td>
                                                <td><?php echo $j['bendera2']; ?></td>
                                            </tr>
                                            <tr style="background-color: #5FB404">
                                                <td>8</td>
                                                <td>Bendera 3</td>
                                                <td><?php echo $j['bendera3']; ?></td>
                                            </tr>
                                            <tr style="background-color: #0B614B">
                                                <td>9</td>
                                                <td>UUD</td>
                                                <td><?php echo $j['uud']; ?></td>
                                            </tr>
                                            <tr style="background-color: #088A68">
                                                <td>10</td>
                                                <td>Pancasila</td>
                                                <td><?php echo $j['pancasila']; ?></td>
                                            </tr>
                                            <tr style="background-color: #04B486">
                                                <td>11</td>
                                                <td>Protokol</td>
                                                <td><?php echo $j['protokol']; ?></td>
                                            </tr>
                                            <tr style="background-color: #086A87">
                                                <td>12</td>
                                                <td>Ajudan</td>
                                                <td><?php echo $j['ajudan']; ?></td>
                                            </tr>
                                            <tr style="background-color: #0489B1">
                                                <td>13</td>
                                                <td>Dirigen</td>
                                                <td><?php echo $j['dirigen']; ?></td>
                                            </tr>
                                            <tr style="background-color: #01A9DB">
                                                <td>14</td>
                                                <td>Doa</td>
                                                <td><?php echo $j['doa']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
             </div>
        </div>