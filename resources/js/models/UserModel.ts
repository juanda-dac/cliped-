import { City } from "./City";
import { Role } from "./Role";
import { UserType } from "./UserType";

export interface User {
    id: number;
    name: string;
    lastName: string;
    userName: string;
    passwordTxt?: string;
    password?: string;
    email: string;
    phone: string;
    address: string;
    createdAt: string;
    updatedAt: string;
    avatarUrl?: string;
    birthdate?: string;
    docType: string;
    docNumber: string;
    sex: string;
    sexOrientation: string;
    rh: string;
    dataValue?: object;
    state: string;
    city: City;
    role: Role;
    userType?: UserType;
}