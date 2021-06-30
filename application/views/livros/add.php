<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Adicionar Livro</h1>
                        <br>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Adicionar
                            </div>
                            
                            <div class="card-body">
                            <form  method="post" action="<?php echo base_url() ?>livros/add">
                                
                               <div class="row">
                                        <div class="form-group col-md-12 col-xs-12">    
                                            <label for="exampleInputEmail1">Titulo</label>
                                            <input type="text" class="form-control" required name="titulo" placeholder="Informe o Titulo">
                                        </div>
                                        <div class="form-group col-md-12 col-xs-12">    
                                            <label for="exampleInputEmail1">Descrição</label>
                                            <input type="text" class="form-control" required name="descricao"  placeholder="Informe o Descrição">
                                        </div>
                                        <div class="form-group col-md-4 col-xs-12">    
                                            <label for="exampleInputEmail1">Autor</label>
                                            <input type="text" class="form-control" required name="autor" placeholder="Informe o Autor">
                                        </div>
                                        
                               </div>
                               <br> 
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Salvar</button>
                                <a href="<?php echo base_url();?>livros"class="btn btn-warning">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>