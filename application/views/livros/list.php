<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Livros</h1>
                        <br>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a target="_self" class="btn btn-primary" href="<?php echo base_url(); ?>livros/add">Adicionar Livro</a>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lista de Livros
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Descrição</th>
                                            <th>Data Cadastro</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($livros)):
                                            foreach($livros as $row):
                                        ?>
                                        <tr>
                                            <td><?php echo $row->id ?></td>
                                            <td><?php echo $row->titulo ?></td>
                                            <td><?php echo  $row->descricao ?></td>
                                            <td><?php echo date('d/m/Y', strtotime($row->datacadastro)) ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="<?php echo site_url('livros/editar/').$row->id ?>">Editar</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('livros/delete/').$row->id ?>" >Excluir</a>
                                            </td>
                                            
                                        </tr>
                                    <?php endforeach; endif;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>