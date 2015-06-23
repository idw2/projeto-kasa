<div class="row">
    <div class="col-sm-12">
        <div class="pull-left hidden">
            <div class="dataTables_info" id="datatable_info">
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>		
            </div>

        </div>
        <div class="pull-left">
       
            <div class="dataTables_paginate paging_bs_normal">
           
                <ul class="pagination pagination-lg">
                    <li class="prev disabled">
                        <?php
                        echo $this->Paginator->prev(__('<i class="fa fa-angle-left"></i>'), array('escape' => false), null, array('class' => 'icon item', 'escape' => false));
                        ?>
                    </li>
                    <li>
                        <?php
                        echo $this->Paginator->numbers(array('separator' => '', 'escape' => false));
                        ?>
                    </li>
                    <li class="next disabled">
                        <?php
                        echo $this->Paginator->next(__('<i class="fa fa-angle-right"></i>'), array('escape' => false), null, array('class' => 'icon item', 'escape' => false));
                        ?>
                    </li>

                </ul>
                   
            </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>