import { Button, StyleSheet, Text, TextInput, View } from 'react-native'
import React from 'react'

export default function Register() {
  return (
    <View style={styles.container}>
        <TextInput style={styles.inputs} placeholder="First Name" />
        <TextInput style={styles.inputs} placeholder="Last Name" />
        <TextInput style={styles.inputs} placeholder="Username" />
        <TextInput style={styles.inputs} placeholder="Email" />
        <TextInput style={styles.inputs} placeholder="Password" />
        <TextInput style={styles.inputs} placeholder="Confirm Password" />
        <Button title="Register" />
    </View>
  )
}

const styles = StyleSheet.create({
    container: {
        flexGrow: 1, // Para permitir que el contenido crezca y sea desplazable
        justifyContent: 'center',
        alignItems: 'center',
      },
      inputs: {
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#fff',
        textAlign: 'center',
        borderWidth: 1,
        borderColor: '#000',
        width: 200,
        height: 40,
        padding: 10,
        margin: 10,
        borderRadius: 10,
      },
})