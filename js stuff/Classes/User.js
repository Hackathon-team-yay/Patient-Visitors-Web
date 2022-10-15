class User {
    constructor(name, email, address, phone, room) {
        this.name = name;
        this.email = email;
        this.address = address;
        this.phone = phone;
        this.room = room;
    }

    get name() {
        return this.name;
    }

    get email() {
        return this.email;
    }

    get address() {
        return this.address;
    }

    get phone() {
        return this.phone;
    }

    get room() {
        return this.room;
    }
}