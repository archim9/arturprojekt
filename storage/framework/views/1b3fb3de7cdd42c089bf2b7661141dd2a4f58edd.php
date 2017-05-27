<div class="form-group">
                        <div class="col-md-4 control-label">
                            <?php echo Form::label('title','Tytuł:'); ?>

                        </div>
                        <div class="col-md-6">
                           <?php echo Form::text('title',null,['class'=>'form-control']); ?>

                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-4 control-label">
                            <?php echo Form::label('description','Opis:'); ?>

                        </div>
                        <div class="col-md-6">
                           <?php echo Form::textarea('description',null,['class'=>'form-control']); ?>

                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-4 control-label">
                            <?php echo Form::label('url','URL filmu:'); ?>

                        </div>
                        <div class="col-md-6">
                           <?php echo Form::text('url',null,['class'=>'form-control']); ?>

                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                           <?php echo Form::submit($buttonText,['class'=>'btn btn-primary']); ?>

                        </div>
                    </div>