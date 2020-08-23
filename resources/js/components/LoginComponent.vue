<template>
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <h2>Sign into Rimsys Central</h2>
        </div>
        <div class="row mt-4">
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleLogin">
                    <div class="form-row">
                        <input
                            type="email"
                            name="email"
                            placeholder="Email Address"
                            class="form-control"
                            v-model="formData.email"
                        />
                    </div>

                    <div class="form-row">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            class="form-control"
                            v-model="formData.password"
                        />
                    </div>

                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            formData: {
                email: "",
                password: ""
            },
            companies: []
        };
    },
    methods: {

        async handleLogin() {
            let { data } = await axios.post("/api/login", this.formData);
            console.log(data);
         },

        // handleLogin() {
        //     axios
        //         .get("/sanctum/csrf-cookie")
        //         .then(response => {
        //             axios
        //                 .post("/login", this.formData)
        //                 .then(response => {
        //                     // console.log(response);
        //                     this.getCompanies();
        //                 })
        //                 .catch(error => {
        //                     console.error(error);
        //                 });
        //         })
        //         .catch(error => {
        //             console.error(error);
        //         });
        // },
        // getCompanies() {
        //     axios.get("/api/companies").then((response) => {
        //         this.companies = response.data
        //     }).catch((error) => {
        //         console.error(error);
        //     })
        // }
    }
};
</script>

<style>
.form-row {
    margin-bottom: 1rem;
}
</style>
