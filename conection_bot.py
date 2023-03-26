import telebot
import csv

TOKEN = '6147252599:AAHEXQZNmrKGIjNgkyOMzuEWjw5ObkJtCeo'

def conectToBot():
  tb = telebot.TeleBot(TOKEN)
  return tb

def getDataCsv():
  data_language_uk = []
  with open('inggris_language.csv', 'r') as file:
    csvreader = csv.reader(file)
    for dataNew in csvreader:
      data_language_uk.append(dataNew)
  
  data_language_id = []
  with open('indonesia_language.csv', 'r') as file:
    csvreader = csv.reader(file)
    for dataNew in csvreader:
      data_language_id.append(dataNew)
  return data_language_uk, data_language_id