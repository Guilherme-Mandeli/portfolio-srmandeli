import type { ProjectStackItem } from "@/types/ProjectStackItem";

const API_BASE_URL = "http://localhost:8080/api/project_stack.php";

export async function fetchProjectStack(): Promise<ProjectStackItem[]> {
  const response = await fetch(API_BASE_URL);
  if (!response.ok) {
    throw new Error(`Failed to fetch project stack: ${response.statusText}`);
  }
  return await response.json();
}

export async function createProjectStack(item: Omit<ProjectStackItem, "id">): Promise<ProjectStackItem> {
  const response = await fetch(API_BASE_URL, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(item)
  });
  if (!response.ok) {
    throw new Error(`Failed to create project stack item: ${response.statusText}`);
  }
  return await response.json();
}

export async function updateProjectStack(id: number, item: Partial<Omit<ProjectStackItem, "id">>): Promise<ProjectStackItem> {
  const response = await fetch(`${API_BASE_URL}?id=${id}`, {
    method: "PUT",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(item)
  });
  if (!response.ok) {
    throw new Error(`Failed to update project stack item: ${response.statusText}`);
  }
  return await response.json();
}

export async function deleteProjectStack(id: number): Promise<{ message: string }> {
  const response = await fetch(`${API_BASE_URL}?id=${id}`, {
    method: "DELETE"
  });
  if (!response.ok) {
    throw new Error(`Failed to delete project stack item: ${response.statusText}`);
  }
  return await response.json();
}
