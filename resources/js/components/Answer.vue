<template>
    <div class="answer">
        <div class="container">
            <div class="top">
                <h3>Answer</h3>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-lg">Selling Price</label>
                <div class="input-group mb-2 col-sm-7">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
            </div>

            <h3>Summary of Value</h3>
            <div class="summary">
                <div class="cost">
                    <div class="text-cost">
                        Item Cost
                    </div>
                    <div class="price-cost">
                        $20000
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Shipping Cost
                    </div>
                    <div class="price-cost">
                        $20000
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Selling Cost
                    </div>
                    <div class="price-cost">
                        $20000
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Transaction Cost
                    </div>
                    <div class="price-cost">
                        $20000
                    </div>
                </div>
            </div>

            <hr class="gach">

            <div class="cost-total">
                <div class="cost">
                    <div class="text-cost">
                        Cost (Total)
                    </div>
                    <div class="price-cost">
                        $23.81
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Revenue
                    </div>
                    <div class="price-cost">
                        $23.71
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Profit
                    </div>
                    <div class="price-cost">
                        $0.02
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Margin
                    </div>
                    <div class="price-cost">
                        1%
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Markup
                    </div>
                    <div class="price-cost">
                        1%
                    </div>
                </div>
            </div>

            <h3>Example Invoice for Buyer</h3>

            <div class="buyer">
                <div class="cost">
                    <div class="text-cost">
                        Item Price
                    </div>
                    <div class="price-cost">
                        $21.71
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Shipping
                    </div>
                    <div class="price-cost">
                        $2.00
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Subtotal
                    </div>
                    <div class="price-cost">
                        $23.12
                    </div>
                </div>
                <div class="cost">
                    <div class="text-cost">
                        Tax
                    </div>
                    <div class="price-cost">
                        $0.22
                    </div>
                </div>
            </div>

            <hr class="hr-total">
            <div class="total">
                <div class="cost">
                    <div class="text-cost">
                        Total
                    </div>
                    <div class="price-cost">
                        $23.93
                    </div>
                </div>
            </div>

            <button class="print"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
            <div></div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss" scrop>
    *{
        margin: 0;
        padding: 0;
    }
    .answer{
        width: 100%;
        background: #fe49a8;
        $color-white: #ffffff;
        
        .top{
            h3{
                padding-top: 35px;
                padding-right: 35px;
                color: $color-white;
            }
        }
        .form-group{
            label{
                color: $color-white;
            }
            .input-group-text{
                background-color: #c9a739;
            }
        }
        h3{
            color: $color-white;
            padding:20px 0px 20px 0px;
        }
        .summary{
            margin-left: 10%;
            color: $color-white;
            .cost{
                display: flex;
                .text-cost{
                    width: 50%;
                    padding-bottom: 10px;
                }
            }
        }
        .gach{
            border-top: 2px dashed $color-white;
        }
        .cost-total{
            margin-left: 10%;
            color: $color-white;
            .cost{
                display: flex;
                .text-cost{
                    width: 50%;
                    padding-bottom: 10px;
                }
            }
        }
        .buyer{
            margin-left: 10%;
            color: $color-white;
            .cost{
                display: flex;
                .text-cost{
                    width: 50%;
                    padding-bottom: 10px;
                }
            }
        }

        .hr-total{
            background-color: $color-white;
        }

        .total{
            margin-left: 10%;
            color: $color-white;
            .cost{
                display: flex;
                .text-cost{
                    width: 50%;
                    padding-bottom: 10px;
                }
            }
        }

        button{
            display: block;
            color: $color-white;
            background-color: #35383b;
            border: none;
            width: 80px;
            height: 35px;
            border-radius: 3px;
            margin-top: 100px;
            margin-bottom: 100px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media screen and (max-width: 600px){
        .answer{
            button{}
        }
    }
</style>
