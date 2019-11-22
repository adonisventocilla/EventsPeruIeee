
<div class="container">
                            <section>
                                    <div class="container" aria-disabled="true">
                                            <div class="stepwizard py-4">
                                                <div class="stepwizard-row setup-panel row" aria-disabled="true">
                                                    <div class="stepwizard-step col text-center">
                                                        @if (isset($step))
                                                            <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">1</a>
                                                        @else
                                                            <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">1</a>
                                                        @endif
                                                        
                                                        <p>Paso 1</p>
                                                    </div>
                                                    <div class="stepwizard-step col text-center">
                                                        @if (isset($step) && $step==1)
                                                            <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">2</a>
                                                            
                                                        @else
                                                            @if (isset($step) && $step>=2)
                                                                <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">1</a>
                                                            @else
                                                                <a class="btn btn-secondary rounded-circle" disabled="disabled" disabled>2</a>
                                                            @endif
                                                        @endif
                                                        
                                                        
                                                        <p>Paso 2</p>
                                                    </div>
                                                    <div class="stepwizard-step col text-center">
                                                        @if (isset($step) && $step==2)
                                                            <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">3</a>
                                                            
                                                        @else
                                                            @if (isset($step) && $step>=3)
                                                                <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">2</a>
                                                            @else
                                                                <a class="btn btn-secondary rounded-circle" disabled="disabled" disabled>3</a>
                                                            @endif
                                                        @endif
                                                        <p>Paso 3</p>
                                                    </div>
                                                    <div class="stepwizard-step col text-center">
                                                        @if (isset($step) && $step==3)
                                                            <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">4</a>
                                                            
                                                        @else
                                                            @if (isset($step) && $step>=4)
                                                                <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">3</a>
                                                            @else
                                                                <a class="btn btn-secondary rounded-circle" disabled="disabled" disabled>4</a>
                                                            @endif
                                                        @endif
                                                        <p>Paso 4</p>
                                                    </div>
                                                    <div class="stepwizard-step col text-center">
                                                        @if (isset($step) && $step==4)
                                                            <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">5</a>
                                                            
                                                        @else
                                                            @if (isset($step) && $step>=5)
                                                                <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">4</a>
                                                            @else
                                                                <a class="btn btn-secondary rounded-circle" disabled="disabled" disabled>5</a>
                                                            @endif
                                                        @endif
                                                        <p>Paso 5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
    
    
                                        
                            </section>
    </div>