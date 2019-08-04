<template>
<div class="card">
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>

    <div class="card-body">
        <form method="POST">

            <h3 class="text-center">What do you do?</h3>
            <div class="form-group row">
                <div class="col-md-12">
                    <input id="email" type="email" placeholder="Enter Your Email Addres" class="form-control text-center " name="email" value="" required="required" autocomplete="email">

                </div>
            </div>
            <p class="text-center">We will not share or display your email address.</p>

            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        Next
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</template>
