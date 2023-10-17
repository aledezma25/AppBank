import { StyleSheet, Text, View, TextInput, Button, Alert} from 'react-native';
import React, { useState } from 'react';
import axios from 'axios';
import { useNavigation } from '@react-navigation/native';
import AsyncStorage from '@react-native-async-storage/async-storage';

export default function Login() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const navigation = useNavigation();

  const handleLogin = () => {
    axios.post('http://192.168.57.32:8080/api/login', {
        email: email,
        password: password,
    })
    .then((response) => {
        Alert.alert('Bienvenido!', 'Inicio de sesión correcto');
        const token = response.data.token;
        AsyncStorage.setItem('token', token);
            navigation.navigate('Home');
        setEmail('');
        setPassword('');
    })
    .catch((error) => {
        if(error.response && error.response.status === 401){
            alert('Error!', 'Usuario o contraseña incorrectos');
            navigation.navigate('Login');
        } else{
            Alert.alert('Error!', 'Hubo un error en el servidor');
            navigation.navigate('Login');
        }
    });
};

    return (
        <View style={styles.container}>
            <Text style={styles.text}>Correo electrónico</Text>
            <TextInput
                style={styles.input}
                onChangeText={setEmail}
                value={email}
                placeholder="Correo electrónico"
                keyboardType="email-address"
            />
            <Text style={styles.text}>Contraseña</Text>
            <TextInput
                style={styles.input}
                onChangeText={setPassword}
                value={password}
                placeholder="Contraseña"
                secureTextEntry={true}
            />
            <Button
                title="Iniciar sesión"
                onPress={handleLogin}
            />
        </View>
    );

const styles = StyleSheet.create({});