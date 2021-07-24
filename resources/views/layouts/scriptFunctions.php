<script>

    let token = localStorage.token;
    let userdata = localStorage.userdata ? JSON.parse(localStorage.userdata) : null;

    function getData(url, then_function = () => {}, catch_function = () => {}) {
        axios
            .get(url, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function postData(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .post(url, data, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function uploadImage(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .put(url, data, {
                headers: {
                    Authorization: "Bearer " + token,
                    "Content-Type": "multipart/form-data"
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function updateData(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .put(url, data, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function deleteData(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .delete(url, data, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    $.fn.serializeControls = function() {
        var data = {};

        function buildInputObject(arr, val) {
            if (arr.length < 1) return val;
            var objkey = arr[0];
            if (objkey.slice(-1) == "]") {
                objkey = objkey.slice(0, -1);
            }
            var result = {};
            if (arr.length == 1) {
                result[objkey] = val;
            } else {
                arr.shift();
                var nestedVal = buildInputObject(arr, val);
                result[objkey] = nestedVal;
            }
            return result;
        }

        $.each(this.serializeArray(), function() {
            var val = this.value;
            var c = this.name.split("[");
            var a = buildInputObject(c, val);
            $.extend(true, data, a);
        });

        return data;
    };

</script>