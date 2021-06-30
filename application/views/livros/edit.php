<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Editar Livro</h1>
                        <br>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Editar
                            </div>
                            
                            <div class="card-body">
                            <form  method="post" action="<?php echo base_url() ?>livros/editar">
                                
                               <div class="row">
                               <input type="hidden" name="id_livro" value="<?php echo $livro->id?>"class="">
                                        <div class="form-group col-md-12 col-xs-12">    
                                            <label for="exampleInputEmail1">Titulo</label>
                                            <input type="text" class="form-control" value="<?php echo $livro->titulo ?:'' ?>"required name="titulo" placeholder="Informe o Titulo">
                                        </div>
                                        <div class="form-group col-md-12 col-xs-12">    
                                            <label for="exampleInputEmail1">Descrição</label>
                                            <input type="text" class="form-control" value="<?php echo $livro->descricao ?:'' ?>" required name="descricao"  placeholder="Informe o Descrição">
                                        </div>
                                        <div class="form-group col-md-4 col-xs-12">    
                                            <label for="exampleInputEmail1">Autor</label>
                                            <input type="text" class="form-control" value="<?php echo $livro->autor ?:'' ?>" required name="autor" placeholder="Informe o Autor">
                                        </div>
                                        
                               </div>
                               <br> 
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>