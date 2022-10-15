class Visitor extends User {
    constructor(name, email, address, phone, room, relationship, inTime, outTime, permission) {
        super(name, email, address, phone, room);
        this.relationship = relationship;
        this.inTime = inTime;
        this.outTime = outTime;
        this.permission = permission;
    }

    get relationship() {
        return this.relationship;
    }

    get inTime() {
        return this.inTime;
    }

    get outTime() {
        return this.outTime;
    }

    get permission() {
        return this.permission;
    }


}





