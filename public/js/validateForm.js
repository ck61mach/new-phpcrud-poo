$("#addProduct").validate({
	rules: {
		id: {
			required: true,
			number: true,
			minlength: 1
		},
		name: {
			required: true,
			minlength: 1,
			maxlength: 100
		},
		price: {
			required: true,
			minlength: 1,
			maxlength: 10000
		},
		currencyType: {
			required: true,
		},
		description: {
			required: true,
			minlength: 1,
			maxlength: 255
		}
	},
	messages: {
		id: {
			required: "Insert product name!",
			minlength: "Alert: Enter at least one character"
		},
		name: {
			required: "Insert product name!",
			minlength: "Alert: Enter at least one character",
			maxlength: "Alert: Reached the maximum allowed character limit"
		},
		price: {
			required: "Insert product price!",
			minlength: "Alert: Enter at least one character",
			maxlength: "Alert: Reached the maximum allowed character limit"
		},
		description: {
			required: "Insert product description!",
			minlength: "Alert: Enter at least one character",
			maxlength: "Alert: Reached the maximum allowed character limit"
		}
	}
});