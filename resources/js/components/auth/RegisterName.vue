<template>
<div class="card">
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
    </div>

    <div class="card-body">
        <form method="POST">

            <h3 class="text-center">What’s your name?</h3>
            <div class="form-group row">

                <div class="col-md-12">
                    <input id="name" type="text" class=" form-control " name="firstname" value="" placeholder="First Name" required="required" autocomplete="name" autofocus="autofocus">

                </div>
            </div>
            <div class="form-group row">

                <div class="col-md-12">
                    <input id="name" type="text" class=" form-control " name="lastname" value="" placeholder="Last Name" required="required" autocomplete="name" autofocus="autofocus">
                </div>
            </div>
            <p class="text-center">Entering your real name helps people find you online.</p>

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
