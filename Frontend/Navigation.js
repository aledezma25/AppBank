import { StyleSheet, Text, View } from 'react-native'
import { NavigationContainer } from '@react-navigation/native'
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs'
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons'

//importamos los componentes que vamos a usar en la navegación
import About from './src/About/About'
import Login from './src/Security/Login'
import Register from './src/Security/Register'

//creamos el componente que va a contener las pestañas
const Tab = createBottomTabNavigator()

//creamos el componente que va a contener la navegación de pestañas
function Tabs(){
    return (
        <Tab.Navigator 
            initialRouteName="Inicio session"
            tabBarOptions={{
            activeTintColor: '#e91e63',}}
        >   
            <Tab.Screen name="Login" component={Login} options={{tabBarLabel:"Login", tabBarIcon: ({color, size}) => (<MaterialCommunityIcons name="account" color={color} size={size} />)}} />
            <Tab.Screen name="Register" component={Register} options={{tabBarLabel:"Register", tabBarIcon: ({color, size}) => (<MaterialCommunityIcons name="account-plus" color={color} size={size} />)}} />
            <Tab.Screen name="About" component={About} options={{tabBarLabel:"About", tabBarIcon: ({color, size}) => (<MaterialCommunityIcons name="information" color={color} size={size} />)}} />
        </Tab.Navigator>
    )
}

//creamos el componente que va a contener la navegación
export default function Navigation() {
  return (
    <NavigationContainer>
        <Tabs/>
    </NavigationContainer>
  )
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        backgroundColor: '#fff',
        alignItems: 'center',
        
    },              
})