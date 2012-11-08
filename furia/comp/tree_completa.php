<?php
$tree_completa['where']    = "WHERE secao = '{$materia->secao}' AND nivel = '{$materia->nivel}' ";
$tree_completa['mateiras'] = Materia::getObjects($tree_completa['where']);
?>
                    <div class="furia-tree">
                        <div id="treecontrol" class="hidden-phone">
                            <a href="#" title="Collapse the entire tree below"><img alt="-" src="<?php echo BASE_PATH; ?>furia/treeview/images/minus.gif">Contrair todos</a>
                            <a href="#" title="Expand the entire tree below"><img alt="+" src="<?php echo BASE_PATH; ?>furia/treeview/images/plus.gif">Expandir todos</a>
                        </div>

                        <h6><?php echo strtoupper($tree_completa['secao']); ?></h6>
                        <ul class="filetree" id="browser">
                            <li class="folder"><span class="folder">Nível Zero</span>
                                <ul>
                                    <?php foreach($tree_completa['mateiras'] as $materia): ?>
                                        <li>
                                            <a href="<?php echo BASE_PATH.$materia->url ?>" class="">
                                                <span class="file">
                                                    <?php echo $materia->titulo ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                         </ul>

<!--                        <ul id="browser" class="filetree">
                            <li><span class="folder">Folder 1</span>
                                <ul>
                                    <li><span class="file">Item 1.1</span></li>
                                </ul>
                            </li>
                            <li><span class="folder">Folder 2</span>
                                <ul>
                                    <li><span class="folder">Subfolder 2.1</span>
                                        <ul id="folder21">
                                            <li><span class="file"><a href="#">file 2.1.1</a></span></li>
                                            <li><span class="file">File 2.1.2</span></li>
                                        </ul>
                                    </li>
                                    <li><span class="file">File 2.2</span></li>
                                </ul>
                            </li>
                            <li class="closed"><span class="folder">Folder 3 (closed at start)</span>
                                <ul>
                                    <li><span class="file">File 3.1</span></li>
                                </ul>
                            </li>
                            <li><span class="file">File 4</span></li>
                        </ul>-->
                    </div>