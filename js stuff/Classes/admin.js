class admin extends User{
    constructor(name, email, address, phone, room, password,) {
        super(name, email, address, phone, room);
        this.password = password;
    }
    get password() {
        return this.password;
    }




}