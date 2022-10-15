class Patient extends Person {
    constructor(name, email, address, phone, room, nurse, doctor, visitor1, visitor2, visitor3) {
        super(name, email, address, phone, room);
        this.nurse = nurse;
        this.doctor = doctor;
        this.visitor1 = visitor1;
        this.visitor2 = visitor2;
        this.visitor3 = visitor3;
    }

    get nurse() {
        return this.nurse;
    }

    get doctor() {
        return this.doctor;
    }

    get visitor1() {
        return this.visitor1;
    }

    get visitor2() {
        return this.visitor2;
    }

    get visitor3() {
        return this.visitor3;
    }
}



