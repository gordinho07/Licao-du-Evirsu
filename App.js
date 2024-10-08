import React, { useState, useEffect } from 'react';
import { View, Text, Button, StyleSheet, Linking } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

const Stack = createStackNavigator();

const ListaDeProdutos = () => {
  const [produtos, setProdutos] = useState([]);

  const handleCarregarProdutos = () => {
    // Aqui você pode adicionar a lógica para carregar os produtos
    console.log('Carregar produtos');
  };

  return (
    <View style={styles.container}>
      <Button title="Carregar Produtos" onPress={handleCarregarProdutos} />
      <Button title="Inserir Produtos" onPress={() => navigation.navigate('InserirProduto')} />
      <Button title="Deletar Produto" onPress={() => navigation.navigate('DeletarProduto')} />
      <Button title="Atualizar Produto" onPress={() => navigation.navigate('AtualizarProduto')} />
      <Button title="Atualizar Parcialmente Produto" onPress={() => navigation.navigate('AtualizarParcialmenteProduto')} />
      <View style={styles.produtosContainer}>
        {/* Aqui você pode renderizar a lista de produtos */}
      </View>
    </View>
  );
};

const InserirProduto = () => {
  // Aqui você pode adicionar a lógica para inserir um produto
  return (
    <View style={styles.container}>
      <Text>Inserir Produto</Text>
      {/* Aqui você pode adicionar o formulário para inserir um produto */}
    </View>
  );
};

const DeletarProduto = () => {
  // Aqui você pode adicionar a lógica para deletar um produto
  return (
    <View style={styles.container}>
      <Text>Deletar Produto</Text>
      {/* Aqui você pode adicionar o formulário para deletar um produto */}
    </View>
  );
};

const AtualizarProduto = () => {
  // Aqui você pode adicionar a lógica para atualizar um produto
  return (
    <View style={styles.container}>
      <Text>Atualizar Produto</Text>
      {/* Aqui você pode adicionar o formulário para atualizar um produto */}
    </View>
  );
};

const AtualizarParcialmenteProduto = () => {
  // Aqui você pode adicionar a lógica para atualizar parcialmente um produto
  return (
    <View style={styles.container}>
      <Text>Atualizar Parcialmente Produto</Text>
      {/* Aqui você pode adicionar o formulário para atualizar parcialmente um produto */}
    </View>
  );
};

const App = () => {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="ListaDeProdutos" component={ListaDeProdutos} />
        <Stack.Screen name="InserirProduto" component={InserirProduto} />
        <Stack.Screen name="DeletarProduto" component={DeletarProduto} />
        <Stack.Screen name="AtualizarProduto" component={AtualizarProduto} />
        <Stack.Screen name="AtualizarParcialmenteProduto" component={AtualizarParcialmenteProduto} />
      </Stack.Navigator>
    </NavigationContainer>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 20,
  },
  produtosContainer: {
    flex: 1,
    padding: 20,
  },
});

export default App;