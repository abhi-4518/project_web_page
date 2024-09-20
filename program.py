import pandas as pd
import matplotlib.pyplot as plt

file_path = 'trip_data.xlsx'

df = pd.read_excel(file_path)

age_data = df['Age']
gender_data = df['Gender']

# bar graph for age distribution
plt.figure(1)
plt.bar(age_data.unique(), age_data.value_counts())
plt.xlabel('Age')
plt.ylabel('Frequency')
plt.title('Age Distribution')

# pie chart for gender distribution
plt.figure(2)
gender_counts = gender_data.value_counts()
plt.pie(gender_counts, labels=gender_counts.index, autopct='%1.1f%%')
plt.title('Gender Distribution')

plt.show()