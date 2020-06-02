<template>
    <div class="price-calculator">
        <div class="container">
            <h3>Selling Price Calculator</h3>
            <div class="make">
                <div class="lb">
                    Item Cost
                </div>
                <div class="text">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="return">
                        <i class="fa fa-question-circle-o" aria-hidden="true"></i> Desired Return
                    </div>
                </div>
            </div>

            <div class="make0">
                <div class="lb0">
                    <span>Item Cost</span>
                </div>
                <div class="text0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="make">
                <div class="lb">
                    <span>Shipping Cost</span>
                </div>
                <div class="text">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="return">
                        <i class="fa fa-question-circle-o" aria-hidden="true"></i> Amount paid by seller
                    </div>
                </div>
            </div>

            <div class="make">
                <div class="lb">
                    <span>Shipping Changer</span>
                </div>
                <div class="text">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="return">
                        <i class="fa fa-question-circle-o" aria-hidden="true"></i> Amount changer to buyer
                    </div>
                </div>
            </div>

            <div class="make1">
                <div class="lb1">
                    <span>Sales Taxt %</span>
                </div>
                <div class="text1">
                    <div class="input-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="make1">
                <div class="lb1">
                </div>
                <div class="text1">
                    <i class="fa fa-check-square" aria-hidden="true"></i> Changer sales Tax on Shipping
                </div>
            </div>

            <div class="list">
                <div class="e-g-list">
                    <div class="vuong"></div>
                    <div class="text-list">
                        Selling Cost (e.g. Amazon, Ebay or Etsy Fees)
                    </div>
                </div>

                <div class="form-e-g">
                    <div class="form-e-g-label">
                        Percentage %
                    </div>
                    <div class="form-e-g-input">
                        <div class="input-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-e-g">
                    <div class="form-e-g-label">
                        <em>and/or</em> Fixed
                    </div>
                    <div class="form-e-g-input">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="e-g-list">
                    <div class="vuong"></div>
                    <div class="text-list">
                        Selling Cost (e.g. Amazon, Ebay or Etsy Fees)
                    </div>
                </div>

                <div class="form-e-g">
                    <div class="form-e-g-label">
                        Percentage %
                    </div>
                    <div class="form-e-g-input">
                        <div class="input-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-e-g">
                    <div class="form-e-g-label">
                        <em>and/or</em> Fixed
                    </div>
                    <div class="form-e-g-input">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-selling">
                <button class="clear"><i class="fa fa-refresh" aria-hidden="true"></i> Clear</button>
                <button class="calculate">% Calculate</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
}
</script>

<style lang="scss" scrop>
*{
    margin: 0;
    padding: 0;
}
    $chuthich:#c9a739;
    $color-e-g-list: #fe49a8;
    .price-calculator{
        h3{
            margin: 40px 0px 40px 0px;
        }

        .make{
            display: flex;
            margin-bottom: 20px;
            margin-left: 10%;
            .lb{
                width: 20%;
                padding-top: 5px;
            }
            .text{
                width: 40%;
                .return{
                    color: $chuthich;
                }
            }
        }

        .make0{
            display: flex;
            margin-left: 10%;
            margin-bottom: 40px;
            .lb0{
                width: 20%;
                padding-top: 5px;
            }
            .text0{
                width: 40%;
                .return{
                    color: $chuthich;
                }
            }
        }
        

        .make1{
            display: flex;
            margin-left: 10%;
            .lb1{
                width: 20%;
                padding-top: 5px;
            }
            .text1{
                width: 40%;
                .return{
                    color: $chuthich;
                }
            }
        }
        
        .list{
            .e-g-list{
                margin-top: 40px;
                display: flex;
                margin-left: 10%;
                .vuong{
                    width:25px;
                    height: 18px;
                    background-color: $color-e-g-list;
                    // display: none;
                }
                .text-list{
                    padding-left: 2%;
                }
            }
            .form-e-g{
                display: flex;
                margin-left: 10%;
                margin-top: 2%;
                .form-e-g-label{
                    width: 20%;
                    padding-top: 5px;
                }
                .form-e-g-input{
                    width: 40%;
                }
            }
        }

        .btn-selling{
            text-align: right;
            margin-left: 25%;
            width: 40%;
            margin-top: 10%;
            .clear{
                background-color: #b7b7b7;
                color: #ffffff;
                width: 90px;
                height: 45px;
                border: none;
                border-radius: 3px;
                box-shadow: 5px 10px 18px #efefef;
            }
            .calculate{
                margin-left: 5%;
                background-color: #35383b;
                color: #ffffff;
                width: 100px;
                height: 45px;
                border-radius: 3px;
                box-shadow: 5px 10px 18px #efefef;
            }
        }
    }

    @media screen and (max-width: 375px){
        .price-calculator{
            
            .make{
                .text{
                    margin-left: 5%;
                    width: 60%;
                }
            }
            .make0{
                .text0{
                    margin-left: 5%;
                    width: 60%;
                }
            }
            .make1{
                .text1{
                    margin-left: 5%;
                    width: 60%;
                }
            }

            .list{
                .form-e-g{
                    .form-e-g-input{
                        margin-left: 5%;
                        width: 60%;
                    }
                }
            }

            .btn-selling{
                text-align: center;
                margin-left: 5%;
                width: 100%;
                margin: auto;
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }
    }
</style>
